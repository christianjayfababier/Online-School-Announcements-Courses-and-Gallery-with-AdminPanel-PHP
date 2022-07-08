const panoImage = document.querySelector('.pano-image');
const prmsuBuilding =  '../img/pano_sample.jpeg';

const panorama = new PANOLENS.ImagePanorama(prmsuBuilding);
const viewer = new PANOLENS.Viewer({

container: panoImage,
autoRotate: true,
autoRotateSpeed: 0.2

});

viewer.add(panorama);
