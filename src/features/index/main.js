import * as THREE from 'three';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
console.log("Hola");

//Canvas
const canvas = document.querySelector('canvas#canvas');

//Renderer
const renderer = new THREE.WebGLRenderer({ antialias: false,alpha:true,canvas});
renderer.setSize(window.innerWidth/2, window.innerHeight/2);
renderer.setPixelRatio(window.devicePixelRatio);
renderer.shadowMap.enabled = false;

//Scene
const scene = new THREE.Scene();

//Camera
const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 1000);
camera.position.set(0.15, 1, 1);

//Orbit controls
const controls = new OrbitControls(camera, renderer.domElement);
controls.enableDamping = false;
controls.enablePan = false;
controls.minDistance = 5;
controls.maxDistance = 0;
controls.minPolarAngle = 0.5;
controls.maxPolarAngle = 1.5;
controls.autoRotate = false;
controls.noZoom = true;
controls.target = new THREE.Vector3(0, 1, 0);
controls.update();



//Spotlight
const spotLight = new THREE.SpotLight(0xffffff, 30000, 100, 0.22, 1);
spotLight.position.set(0, 75, 0);
spotLight.castShadow = false;
spotLight.shadow.bias = -0.0001;
scene.add(spotLight);

//Paths
const mars= './public/models/mars/';
const earth = './public/models/earth/';

//Call to function
let mesh;
loadPlanet(mars);

//Event to resize
window.addEventListener('resize', () => {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
});

//Call to animate
animate();

//Events for changin displayed planet
document.getElementById('left').addEventListener("click",event =>{
  console.log('Works');
loadPlanet(earth)
});


document.getElementById('right').addEventListener("click",event =>{
  console.log('Works');
loadPlanet(mars)
});


function loadPlanet(path){
const loader = new GLTFLoader().setPath(path);
loader.load('scene.gltf', (gltf) => {
  console.log(gltf);
  console.log('loading model');
  mesh = gltf.scene;

  mesh.position.set(0, 1, -1);
  scene.add(mesh);

  document.getElementById('progress-container').style.display = 'none';
}, (xhr) => {
  console.log(`loading ${xhr.loaded / xhr.total * 100}%`);
}, (error) => {
  console.error(error);
});
}

function animate() {
  requestAnimationFrame(animate);
  controls.update();
  renderer.render(scene, camera);
}

