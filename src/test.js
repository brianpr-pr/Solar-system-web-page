import * as THREE from 'three';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

console.log('Hola');

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
camera.position.set(4, 5, 11);

//Orbit controls
const controls = new OrbitControls(camera, renderer.domElement);
controls.enableDamping = true;
controls.enablePan = false;
controls.minDistance = 5;
controls.maxDistance = 50000;
controls.minPolarAngle = 0.5;
controls.maxPolarAngle = 1.5;
controls.autoRotate = false;
controls.target = new THREE.Vector3(0, 1, 0);
controls.update();

//Base geometry object
const groundGeometry = new THREE.PlaneGeometry(20, 20, 32, 32);
groundGeometry.rotateX(-Math.PI / 2);
const groundMaterial = new THREE.MeshStandardMaterial({
  color: 0x555555,
  side: THREE.DoubleSide
});
const groundMesh = new THREE.Mesh(groundGeometry, groundMaterial);
groundMesh.castShadow = false;
groundMesh.receiveShadow = false;
scene.add(groundMesh);

//Spotlight
const spotLight = new THREE.SpotLight(0xffffff, 30000, 100, 0.22, 1);
spotLight.position.set(0, 75, 0);
spotLight.castShadow = false;
spotLight.shadow.bias = -0.0001;
scene.add(spotLight);

//Paths
const mars= '/public/mars/';
const earth = '/public/earth/';


//Call to function
loadPlanet(mars);