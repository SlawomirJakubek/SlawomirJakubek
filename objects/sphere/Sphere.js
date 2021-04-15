class Sphere extends HTMLDivElement{

    constructor(side){
        super();
        const SPECKS_URL = './objects/sphere/img/specks.jpg';
        const GLASS_URL = './objects/sphere/img/glass.jpg';
        const LOADING_URL = './objects/sphere/img/loading.png';
        
        this.side = side;
        this.style.width = this.style.height = '0px';//`${side}px`;
        this.style.overflow = 'hidden';
        this.style.display = 'flex';
        this.style.justifyContent = 'center';
        this.style.alignItems = 'center';
        //this.style.border = '1px solid white';
        this.style.transition = "width .5s, height .5s .5s";
        
        
        const layers = document.createElement('div');
        layers.side = side * .833;
        layers.scaling = layers.side / 375;
        layers.style.minWidth = layers.style.minHeight = layers.style.width = layers.style.height = layers.side + 'px';
        layers.style.position = 'relative';
        layers.style.boxShadow = `0 0 ${60 * layers.scaling}px ${-20 * layers.scaling}px rgb(0, 255, 255)`;
        layers.style.borderRadius = "50%";
        layers.style.border = ".1px solid rgb(0, 56, 56)";
        layers.style.backgroundImage = 'radial-gradient(closest-side, rgb(0, 80, 80),  rgb(0, 180, 180), rgb(0, 40, 40))';
        this.appendChild(layers);
        
        /*PREVENT DRAGGING IMAGES*/
        this.addEventListener('mousedown',  e => {
            e.preventDefault();
        });
        /*
        this.addEventListener('touchstart',  e => {
            e.preventDefault();
        });
        */

         
        let addLayer = (obj, zIndex, scale = "100", mixBlendMode = 'hard-light') => {
            obj.style.overflow = "hidden";
            obj.style.borderRadius = "50%";
            obj.style.width = `${scale}%`;
            obj.style.height = `${scale}%`;
            obj.style.position = 'absolute';
            obj.style.top = `${(100 - scale) / 2}%`;
            obj.style.left = `${(100 - scale) / 2}%`;
            obj.style.zIndex = zIndex;
            obj.style.mixBlendMode = mixBlendMode;
            obj.setAttribute('id', 'sphere-surface' + zIndex);
            layers.appendChild(obj);
        }

        let specks = new Image();
        specks.onload = e => {
            let specksXY = [{ x: 0, y: 0 }, { x: 80, y: 0 }, { x: 160, y: 0 }, { x: 240, y: 0 }, { x: 0, y: 80 }, { x: 80, y: 80 }, { x: 160, y: 0 }, { x: 240, y: 80 }];
            const cloudSide = 80;
            let cloudWidth = cloudSide;
            let cloudHeight = cloudSide;
            const center = (layers.side / 2) - (cloudSide * layers.scaling / 2);

            let addCloud = (radius, elementsNumber, index) => {
                let c = document.createElement('canvas');
                c.width = layers.side;
                c.height = layers.side;

                let ctx = c.getContext('2d');
                ctx.fillStyle = 'rgb(128, 128, 128)';
                ctx.fillRect(0, 0, layers.side, layers.side);
                ctx.globalCompositeOperation = 'hard-light';
                
                for (let angle = 0; angle < 360; angle += (360 / elementsNumber)) {
                    let sourceXY = specksXY[Math.round(Math.random() * (specksXY.length - 1))];
                    let destinationXY = {
                        x: Math.round((radius * Math.sin(angle * Math.PI / 180).toFixed(3)) + center),
                        y: Math.round(((radius * Math.cos(angle * Math.PI / 180).toFixed(3)) - center) * -1) };

                    ctx.drawImage(specks, sourceXY.x, sourceXY.y, cloudWidth, cloudHeight, destinationXY.x, destinationXY.y, cloudWidth * layers.scaling, cloudHeight * layers.scaling);
                }

                let img = document.createElement('img');
                img.src = c.toDataURL("image/png");
                addLayer(img, index);
            }

            addCloud((layers.side * .52) - (cloudSide * layers.scaling * .3), 32, 1);
            addCloud((layers.side * .4) - (cloudSide * layers.scaling * .2), 22, 2);
            addCloud((layers.side * .3) - (cloudSide * layers.scaling * .2), 18, 3);
            addCloud((layers.side * .2) - (cloudSide * layers.scaling * .2), 32, 3);

            completed();
        }
        specks.src = SPECKS_URL;

        let glass = new Image();
        glass.style.opacity = 0.5;
        glass.onload = (e) =>{
            addLayer(glass, 8);
            completed();
        }
        glass.src = GLASS_URL;

        const loadingLayers = [];
        let loading = new Image();
        loading.onload = (e) =>{

            addLayer(loading, 5, 120, 'normal');
            loadingLayers.push(loading);
            
            let img = new Image();
            img.src = loading.src;
            addLayer(img, 6, 120, 'normal');
            loadingLayers.push(img);
            
            img = new Image();
            img.src = loading.src;
            addLayer(img, 7, 120, 'normal');
            loadingLayers.push(img);

            for(let loadingLayer of loadingLayers){
                loadingLayer.style.transform = "scale(.5)";
                loadingLayer.style.transition = "all 1s 1s";
            }

            completed();
        }
        loading.src = LOADING_URL;

        let toggleLoading = () => {
            for(let loadingLayer of loadingLayers){
                loadingLayer.style.transform = "scale(1)";
            }
        };

        let layersLoaded = 0;
        let completed = () => {
            layersLoaded++;
            if(layersLoaded == 3){
                this.dispatchEvent(new Event('COMPLETE'));
                void this.offsetWidth;
                this.style.width = this.style.height = this.side + 'px';
                //toggleLoading();
            }
        }
    }
}

customElements.define('my-sphere', Sphere, { extends: 'div' });