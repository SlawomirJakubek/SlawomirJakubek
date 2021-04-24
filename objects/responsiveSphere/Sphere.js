class Sphere extends HTMLDivElement{


    constructor(){
        super();
        const MAX_SIDE = 432;
        const INNER_SIDE_PERC = .833;
        const INNER_SIDE = MAX_SIDE * INNER_SIDE_PERC;
        const SPECKS_URL = './objects/responsiveSphere/img/specks.jpg';
        const GLASS_URL = './objects/responsiveSphere/img/glass.jpg';
        const LOADING_URL = './objects/responsiveSphere/img/loading.png';
        this.scrollHistory = [0];
        
        this.style.position = 'relative';
        this.style.transition = 'max-width .5s, max-height .5s';
        
        this.style.maxWidth = this.style.maxHeight = 0;
        this.style.zIndex = 10;
        this.style.top = 0;

        this._textLayers = document.createElement('div');
        this._textLayers.style.transition = 'opacity .5s';
        this._textLayers.style.position = 'relative';//must be or overflow will not work properly
        this._textLayers.style.width = this._textLayers.style.height = '100%';
        this._textLayers.style.overflow = 'hidden';
        this.appendChild(this._textLayers);

        /*PREVENT DRAGGING IMAGES*/
        this.addEventListener('mousedown',  e => { e.preventDefault(); });
        //this.addEventListener('touchstart',  e => { e.preventDefault(); });
        
        const innerLayersContainer = document.createElement('div');
        innerLayersContainer.style.position = 'absolute';
        innerLayersContainer.style.overflow = 'hidden';
        innerLayersContainer.style.zIndex = 1;
        innerLayersContainer.style.borderRadius = '50%';
        innerLayersContainer.style.boxShadow = `0 0 ${60}px ${-20}px rgb(0, 255, 255)`;
        innerLayersContainer.style.width = `${INNER_SIDE_PERC * 100}%`;
        innerLayersContainer.style.height = `${INNER_SIDE_PERC * 100}%`;
        innerLayersContainer.style.top = `${((1 - INNER_SIDE_PERC) * 100) / 2}%`;
        innerLayersContainer.style.left = `${((1 - INNER_SIDE_PERC) * 100) / 2}%`;
        innerLayersContainer.style.border = '2px solid rgba(0, 100, 100, 1)';
        this.appendChild(innerLayersContainer);

        const innerLayers = document.createElement('div');
        innerLayers.style.position = 'relative';
        innerLayers.style.borderRadius = '50%';
        innerLayers.style.width = innerLayers.style.height = '100%';
        innerLayers.style.backgroundImage = 'radial-gradient(closest-side, rgb(0, 80, 80),  rgb(0, 180, 180), rgb(0, 40, 40))';
        innerLayersContainer.appendChild(innerLayers);
        
        let speckLayerIndex = 0;
        let specks = new Image();
        let cloud1;
        let cloud2;
        let cloud3;
        let cloud4;
        specks.onload = e => {
            let specksXY = [{ x: 0, y: 0 }, { x: 80, y: 0 }, { x: 160, y: 0 }, { x: 240, y: 0 }, { x: 0, y: 80 }, { x: 80, y: 80 }, { x: 160, y: 0 }, { x: 240, y: 80 }];
            const cloudSide = 80;
            let cloudWidth = cloudSide;
            let cloudHeight = cloudSide;
            const center = (INNER_SIDE / 2) - (cloudSide * 1 / 2);

            let addCloud = (radius, elementsNumber) => {
                let c = document.createElement('canvas');
                c.width = INNER_SIDE;
                c.height = INNER_SIDE;

                let ctx = c.getContext('2d');
                ctx.fillStyle = 'rgb(128, 128, 128)';
                ctx.fillRect(0, 0, INNER_SIDE, INNER_SIDE);
                ctx.globalCompositeOperation = 'hard-light';
                
                for (let angle = 0; angle < 360; angle += (360 / elementsNumber)) {
                    let sourceXY = specksXY[Math.round(Math.random() * (specksXY.length - 1))];
                    let destinationXY = {
                        x: Math.round((radius * Math.sin(angle * Math.PI / 180).toFixed(3)) + center),
                        y: Math.round(((radius * Math.cos(angle * Math.PI / 180).toFixed(3)) - center) * -1) };

                    ctx.drawImage(specks, sourceXY.x, sourceXY.y, cloudWidth, cloudHeight, destinationXY.x, destinationXY.y, cloudWidth * 1, cloudHeight * 1);
                }

                let img = document.createElement('img');
                img.src = c.toDataURL("image/png");
                img.style.width = img.style.height = '100%';
                img.style.overflow = 'hidden';
                img.style.borderRadius = '50%';

                if(speckLayerIndex > 0){
                    img.style.position = 'absolute';
                    img.style.top = 0;
                    img.style.left = 0;
                }

                img.style.zIndex = speckLayerIndex++;
                img.style.mixBlendMode = 'hard-light';
                innerLayers.appendChild(img);
                return img;
            }

            cloud1 = addCloud((INNER_SIDE * .52) - (cloudSide * 1 * .3), 32);
            cloud2 = addCloud((INNER_SIDE * .4) - (cloudSide * 1 * .2), 22);
            cloud3 = addCloud((INNER_SIDE * .3) - (cloudSide * 1 * .2), 18);
            cloud4 = addCloud((INNER_SIDE * .2) - (cloudSide * 1 * .2), 32);
            completed();
        }
        specks.src = SPECKS_URL;

        let glass = new Image();
        glass.style.opacity = 0.5;
        glass.onload = (e) =>{
            
            glass.style.mixBlendMode = 'hard-light';
            glass.style.position = 'absolute';
            glass.style.top = 0;
            glass.style.left = 0;
            glass.style.width = glass.style.height = '100%';
            glass.style.zIndex = 4;
            innerLayers.appendChild(glass);
            completed();
        }
        glass.src = GLASS_URL;

        let textLayerZIndex = 0;
        let loading = new Image();
        loading.onload = (e) =>{

            const setTextLayer = () => {
                const img = new Image();
                img.src = loading.src;
                img.style.width = '100%';
                if(textLayerZIndex > 0){
                    img.style.position = 'absolute';
                    img.style.top = 0;
                    img.style.left = 0;
                }
                img.style.zIndex = textLayerZIndex++;
                img.id = `sphere-text-layer-${textLayerZIndex}`;
                this._textLayers.appendChild(img);
            };

            setTextLayer();
            setTextLayer();
            setTextLayer();
            completed();
        }
        loading.src = LOADING_URL;

        let layersLoaded = 0;
        let completed = () => {
            layersLoaded++;
            if(layersLoaded == 3){

                //delay
                window.setTimeout(()=>{
                    //console.log('sphere downloaded');
                    
                    //inform it is ready to by added
                    this.dispatchEvent(new Event('COMPLETE'));
                    
                    // animate specks
                    requestAnimationFrame(rotateSpecks); 
                    
                    // animate growth
                    void this.offsetWidth;
                    this.style.maxWidth = this.style.maxHeight = `${MAX_SIDE}px`;

                    window.onscroll = ()=>{this.setPosition()};
                    
                    const onResize = () => {this.reset()};
                    const removeOnResizeOnTouchStart = () =>{
                        //console.log('window.removeEventListener(\'resize\', onResize)');
                        document.removeEventListener('touchstart', removeOnResizeOnTouchStart);
                        window.removeEventListener('resize', onResize);
                    };

                    window.addEventListener('resize', onResize);
                    document.addEventListener('touchstart', removeOnResizeOnTouchStart);

                }, 1000);
            }
        }

        //using requestAnimationFrame instead of CSS animations due to rendering errors on Chrome
        let turn = 0;
        let frame = 0;
        
        function rotateSpecks() {
            
            frame++;
            if(frame % 7 == 0){
                
                turn += .0006;
                if(turn > 1){
                    turn = 0;
                }

                cloud1.style.transform = `rotateZ(${turn}turn)`;
                cloud3.style.transform = `rotateZ(${turn * 1.5}turn)`;
                cloud2.style.transform = `rotateZ(${turn * -1}turn)`;
                cloud4.style.transform = `rotateZ(${turn * -1.5}turn)`;

            }
            requestAnimationFrame(rotateSpecks);
        }
    }

    hideText(){
        this._textLayers.style.opacity = 0;
    }

    //onResize
    reset(){
        this.style.position = 'relative';
        this.style.top = this.style.right = this.style.width = '';
        void this.offsetWidth;
        
        this.initialValues = {
            top: undefined,
            right: undefined,
            width: undefined,
            mainRange: {
                min: undefined,
                max: this.minimizeBoundryObject.offsetTop
            },
            rightRange: {
                min: undefined,
                max: parseInt(window.getComputedStyle(document.body).getPropertyValue('margin-right').replace('px', ''))
            },
            widthRange: {
                min: undefined,
                max: 100
            }
        };

        this.initialValues.top = this.initialValues.mainRange.min = this.offsetTop;
        this.initialValues.right = this.initialValues.rightRange.min = this.getBoundingClientRect().left;
        this.initialValues.width = this.initialValues.widthRange.min = this.getBoundingClientRect().width;
        

        // console.log('reset', this.initialValues);
        this.style.position = 'fixed';
        this.setPosition('from reset');
    }

    //onScroll
    setPosition(x){
        // console.log('setPosition', x, 'current scrollY: ', window.scrollY);
        const bodyRightMargin = parseInt(window.getComputedStyle(document.body).getPropertyValue('margin-right').replace('px', ''));


        const setInPx = (top, right, width) => {
            this.style.top = top + 'px';
            this.style.right = right + 'px';
            this.style.width = width + 'px';
            //console.log('set: ', top, right, width);
        }

        if(window.scrollY <= this.initialValues.top){
            
            setInPx(
                window.scrollY <= this.initialValues.top ? this.initialValues.top - window.scrollY : 0,
                this.initialValues.right,
                this.initialValues.width);
        }else{
            if(window.scrollY > this.initialValues.mainRange.min && window.scrollY <= this.initialValues.mainRange.max){
                setInPx(
                    0,
                    window.scrollY <= this.initialValues.mainRange.max ? this.translateInRange(window.scrollY, this.initialValues.rightRange) : bodyRightMargin,
                    window.scrollY <= this.initialValues.mainRange.max ? this.translateInRange(window.scrollY, this.initialValues.widthRange) : 100
                );
            }else{
                setInPx(0, bodyRightMargin, 100);
            }
        }
    }

    set minimizeBoundryObject(obj){
        this._minimizeBoundryObject = obj;
    }

    get minimizeBoundryObject(){
        return this._minimizeBoundryObject;
    }

    translateInRange(mainRangeInput, secondRange) {
        return (((mainRangeInput - this.initialValues.mainRange.min) * (secondRange.max - secondRange.min)) / (this.initialValues.mainRange.max - this.initialValues.mainRange.min)) + secondRange.min;
    }
}
customElements.define('my-sphere', Sphere, { extends: 'div' });