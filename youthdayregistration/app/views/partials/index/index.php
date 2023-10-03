
<?php 
$page_id = null;
$comp_model = new SharedController;
?>


<div  class="">
    <div class="">
        
        <div class="row ">
            
            <div class="col-md-12 ">
                <div class=""><style>
                    @font-face {
                    font-family: 'Gotham Ultra';
                    src: url('assets/fonts/Gotham-UltraItalic.eot');
                    src: url('assets/fonts/Gotham-UltraItalic.eot?#iefix') format('embedded-opentype'),
                    url('assets/fonts/Gotham-UltraItalic.woff2') format('woff2'),
                    url('assets/fonts/Gotham-UltraItalic.woff') format('woff'),
                    url('assets/fonts/Gotham-UltraItalic.ttf') format('truetype');
                    font-weight: normal;
                    font-style: italic;
                    }
                    
                    @font-face {
                    font-family: 'Gotham';
                    src: url('assets/fonts/Gotham-Black.eot');
                    src: url('assets/fonts/Gotham-Black.eot?#iefix') format('embedded-opentype'),
                    url('assets/fonts/Gotham-Black.woff2') format('woff2'),
                    url('assets/fonts/Gotham-Black.woff') format('woff'),
                    url('assets/fonts/Gotham-Black.ttf') format('truetype');
                    font-weight: 900;
                    font-style: normal;
                    }
                    
                    @font-face {
                    font-family: 'Gotham';
                    src: url('assets/fonts/Gotham-MediumItalic.eot');
                    src: url('assets/fonts/Gotham-MediumItalic.eot?#iefix') format('embedded-opentype'),
                    url('assets/fonts/Gotham-MediumItalic.woff2') format('woff2'),
                    url('assets/fonts/Gotham-MediumItalic.woff') format('woff'),
                    url('assets/fonts/Gotham-MediumItalic.ttf') format('truetype');
                    font-weight: 500;
                    font-style: italic;
                    }
                    
                    @font-face {
                    font-family: 'Gotham Book';
                    src: url('assets/fonts/Gotham-Book.eot');
                    src: url('assets/fonts/Gotham-Book.eot?#iefix') format('embedded-opentype'),
                    url('assets/fonts/Gotham-Book.woff2') format('woff2'),
                    url('assets/fonts/Gotham-Book.woff') format('woff'),
                    url('assets/fonts/Gotham-Book.ttf') format('truetype');
                    font-weight: normal;
                    font-style: normal;
                    }
                    
                    @font-face {
                    font-family: 'Gotham';
                    src: url('assets/fonts/Gotham-Bold.eot');
                    src: url('assets/fonts/Gotham-Bold.eot?#iefix') format('embedded-opentype'),
                    url('assets/fonts/Gotham-Bold.woff2') format('woff2'),
                    url('assets/fonts/Gotham-Bold.woff') format('woff'),
                    url('assets/fonts/Gotham-Bold.ttf') format('truetype');
                    font-weight: bold;
                    font-style: normal;
                    }
                    
                    @font-face {
                    font-family: 'Gotham Book';
                    src: url('assets/fonts/Gotham-BookItalic.eot');
                    src: url('assets/fonts/Gotham-BookItalic.eot?#iefix') format('embedded-opentype'),
                    url('assets/fonts/Gotham-BookItalic.woff2') format('woff2'),
                    url('assets/fonts/Gotham-BookItalic.woff') format('woff'),
                    url('assets/fonts/Gotham-BookItalic.ttf') format('truetype');
                    font-weight: normal;
                    font-style: italic;
                    }
                    
                    @font-face {
                    font-family: 'Gotham';
                    src: url('assets/fonts/Gotham-BlackItalic.eot');
                    src: url('assets/fonts/Gotham-BlackItalic.eot?#iefix') format('embedded-opentype'),
                    url('assets/fonts/Gotham-BlackItalic.woff2') format('woff2'),
                    url('assets/fonts/Gotham-BlackItalic.woff') format('woff'),
                    url('assets/fonts/Gotham-BlackItalic.ttf') format('truetype');
                    font-weight: 900;
                    font-style: italic;
                    }
                    
                    @font-face {
                    font-family: 'Gotham';
                    src: url('assets/fonts/Gotham-BoldItalic.eot');
                    src: url('assets/fonts/Gotham-BoldItalic.eot?#iefix') format('embedded-opentype'),
                    url('assets/fonts/Gotham-BoldItalic.woff2') format('woff2'),
                    url('assets/fonts/Gotham-BoldItalic.woff') format('woff'),
                    url('assets/fonts/Gotham-BoldItalic.ttf') format('truetype');
                    font-weight: bold;
                    font-style: italic;
                    }
                    
                    @font-face {
                    font-family: 'Muro';
                    src: url('assets/fonts/Muro-Regular.woff2') format('woff2'),
                    url('assets/fonts/Muro-Regular.woff') format('woff');
                    font-weight: normal;
                    font-style: normal;
                    }
                    .animate-grayscale1{
                    -webkit-animation: grayscale-animation 3s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                    animation: grayscale-animation 3s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                    }
                    
                    .animate-grayscale2{
                    -webkit-animation: grayscale-animation 3s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.5s both;
                    animation: grayscale-animation 3s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.5s both;
                    }
                    
                    @-webkit-keyframes grayscale-animation {
                    0% {
                    -webkit-filter: grayscale(100%);
                    filter: grayscale(100%);
                    opacity: 1;
                    }
                    100% {
                    -webkit-filter: grayscale(0%);
                    filter: grayscale(0%);
                    opacity: 1;
                    }
                    }
                    @keyframes grayscale-animation {
                    0% {
                    -webkit-filter: grayscale(100%);
                    filter: grayscale(100%);
                    opacity: 1;
                    }
                    100% {
                    -webkit-filter: grayscale(0%);
                    filter: grayscale(0%);
                    opacity: 1;
                    }
                    }
                    .animate-1{
                    -webkit-animation: animate-1-keyframe 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.3s both;
                    animation: animate-1-keyframe 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.3s both;
                    }
                    
                    .animate-2{
                    -webkit-animation: animate-2-keyframe 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.2s both;
                    animation: animate-2-keyframe 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.2s both;
                    }
                    
                    .animate-3{
                    -webkit-animation: animate-3-keyframe 0.8s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                    animation: animate-3-keyframe 0.8s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                    }
                    .animate-5 {
                    -webkit-animation: animate-7-keyframe 0.8s cubic-bezier(0.785, 0.135, 0.150, 0.860) 0.2s both;
                    animation: animate-7-keyframe 0.8s cubic-bezier(0.785, 0.135, 0.150, 0.860) 0.2s both;
                    }
                    .animate-6 {
                    -webkit-animation: animate-7-keyframe 0.8s cubic-bezier(0.785, 0.135, 0.150, 0.860) 0.4s both;
                    animation: animate-7-keyframe 0.8s cubic-bezier(0.785, 0.135, 0.150, 0.860) 0.4s both;
                    }
                    
                    .animate-7 {
                    -webkit-animation: animate-7-keyframe 0.8s cubic-bezier(0.785, 0.135, 0.150, 0.860) 0.6s both;
                    animation: animate-7-keyframe 0.8s cubic-bezier(0.785, 0.135, 0.150, 0.860) 0.6s both;
                    }
                    
                    .animate-8 {
                    -webkit-animation: animate-8-keyframe 0.8s cubic-bezier(0.785, 0.135, 0.150, 0.860) both;
                    animation: animate-8-keyframe 0.8s cubic-bezier(0.785, 0.135, 0.150, 0.860) both;
                    }
                    
                    .animate-9{
                    -webkit-animation: animate-9-keyframe 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                    animation: animate-9-keyframe 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                    }
                    
                    
                    @-webkit-keyframes animate-1-keyframe {
                    0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                    -webkit-transform-origin: 95% 81%;
                    transform-origin: 95% 81%;
                    opacity: 1;
                    }
                    50% {
                    -webkit-transform: scale(1.1);
                    transform: scale(1.1);
                    -webkit-transform-origin: 95% 81%;
                    transform-origin: 95% 81%;
                    opacity: 1;
                    }
                    70% {
                    -webkit-transform: scale(0.9);
                    transform: scale(0.9);
                    -webkit-transform-origin: 95% 81%;
                    transform-origin: 95% 81%;
                    opacity: 1;
                    }
                    100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    -webkit-transform-origin: 95% 81%;
                    transform-origin: 95% 81%;
                    opacity: 1;
                    }
                    }
                    @keyframes animate-1-keyframe{
                    0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                    -webkit-transform-origin: 95% 81%;
                    transform-origin: 95% 81%;
                    opacity: 1;
                    }
                    50% {
                    -webkit-transform: scale(1.1);
                    transform: scale(1.1);
                    -webkit-transform-origin: 95% 81%;
                    transform-origin: 95% 81%;
                    opacity: 1;
                    }
                    70% {
                    -webkit-transform: scale(0.9);
                    transform: scale(0.9);
                    -webkit-transform-origin: 95% 81%;
                    transform-origin: 95% 81%;
                    opacity: 1;
                    }
                    100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    -webkit-transform-origin: 95% 81%;
                    transform-origin: 95% 81%;
                    opacity: 1;
                    }
                    }
                    
                    @-webkit-keyframes animate-2-keyframe {
                    0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                    -webkit-transform-origin: 55% 25%;
                    transform-origin: 55% 25%;
                    opacity: 1;
                    }
                    50% {
                    -webkit-transform: scale(1.1);
                    transform: scale(1.1);
                    -webkit-transform-origin: 55% 25%;
                    transform-origin: 55% 25%;
                    opacity: 1;
                    }
                    70% {
                    -webkit-transform: scale(0.9);
                    transform: scale(0.9);
                    -webkit-transform-origin: 55% 25%;
                    transform-origin: 55% 25%;
                    opacity: 1;
                    }
                    100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    -webkit-transform-origin: 55% 25%;
                    transform-origin: 55% 25%;
                    opacity: 1;
                    }
                    }
                    @keyframes animate-2-keyframe{
                    0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                    -webkit-transform-origin: 55% 25%;
                    transform-origin: 55% 25%;
                    opacity: 1;
                    }
                    50% {
                    -webkit-transform: scale(1.1);
                    transform: scale(1.1);
                    -webkit-transform-origin: 55% 25%;
                    transform-origin: 55% 25%;
                    opacity: 1;
                    }
                    70% {
                    -webkit-transform: scale(0.9);
                    transform: scale(0.9);
                    -webkit-transform-origin: 55% 25%;
                    transform-origin: 55% 25%;
                    opacity: 1;
                    }
                    100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    -webkit-transform-origin: 50% 25%;
                    transform-origin: 50% 25%;
                    opacity: 1;
                    }
                    }
                    
                    @-webkit-keyframes animate-3-keyframe {
                    0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                    opacity: 1;
                    }
                    50% {
                    -webkit-transform: scale(1.1);
                    transform: scale(1.1);
                    opacity: 1;
                    }
                    70% {
                    -webkit-transform: scale(0.9);
                    transform: scale(0.9);
                    opacity: 1;
                    }
                    100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    opacity: 1;
                    }
                    }
                    @keyframes animate-3-keyframe {
                    0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                    opacity: 1;
                    }
                    50% {
                    -webkit-transform: scale(1.1);
                    transform: scale(1.1);
                    opacity: 1;
                    }
                    70% {
                    -webkit-transform: scale(0.9);
                    transform: scale(0.9);
                    opacity: 1;
                    }
                    100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    opacity: 1;
                    }
                    }
                    
                    @-webkit-keyframes animate-5-keyframe {
                    0% {
                    -webkit-transform: translateY(30%);
                    transform: translateY(30%);
                    opacity: 0;
                    }
                    100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                    opacity: 1;
                    }
                    }
                    @keyframes animate-5-keyframe {
                    0% {
                    -webkit-transform: translateY(30%);
                    transform: translateY(30%);
                    opacity: 0;
                    }
                    100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                    opacity: 1;
                    }
                    }
                    
                    @-webkit-keyframes animate-6-keyframe {
                    0% {
                    -webkit-transform: translateY(30%);
                    transform: translateY(30%);
                    opacity: 0;
                    }
                    100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                    opacity: 1;
                    }
                    }
                    @keyframes animate-6-keyframe {
                    0% {
                    -webkit-transform: translateY(30%);
                    transform: translateY(30%);
                    opacity: 0;
                    }
                    100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                    opacity: 1;
                    }
                    }
                    
                    @-webkit-keyframes animate-7-keyframe {
                    0% {
                    -webkit-transform: translateY(30%);
                    transform: translateY(30%);
                    opacity: 0;
                    }
                    100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                    opacity: 1;
                    }
                    }
                    @keyframes animate-7-keyframe {
                    0% {
                    -webkit-transform: translateY(30%);
                    transform: translateY(30%);
                    opacity: 0;
                    }
                    100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                    opacity: 1;
                    }
                    }
                    
                    @-webkit-keyframes animate-8-keyframe {
                    0% {
                    -webkit-transform: translateY(30%);
                    transform: translateY(30%);
                    opacity: 0;
                    }
                    100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                    opacity: 1;
                    }
                    }
                    @keyframes animate-8-keyframe {
                    0% {
                    -webkit-transform: translateY(30%);
                    transform: translateY(30%);
                    opacity: 0;
                    }
                    100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                    opacity: 1;
                    }
                    }
                    
                    
                    @-webkit-keyframes animate-9-keyframe {
                    0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                    -webkit-transform-origin: 10% 70%;
                    transform-origin: 10% 70%;
                    opacity: 1;
                    }
                    50% {
                    -webkit-transform: scale(1.1);
                    transform: scale(1.1);
                    -webkit-transform-origin: 10% 70%;
                    transform-origin: 10% 70%;
                    opacity: 1;
                    }
                    70% {
                    -webkit-transform: scale(0.9);
                    transform: scale(0.9);
                    -webkit-transform-origin: 10% 70%;
                    transform-origin: 10% 70%;
                    opacity: 1;
                    }
                    100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    -webkit-transform-origin: 10% 70%;
                    transform-origin: 10% 70%;
                    opacity: 1;
                    }
                    }
                    @keyframes animate-9-keyframe{
                    0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                    -webkit-transform-origin: 10% 70%;
                    transform-origin: 10% 70%;
                    opacity: 1;
                    }
                    50% {
                    -webkit-transform: scale(1.1);
                    transform: scale(1.1);
                    -webkit-transform-origin: 10% 70%;
                    transform-origin: 10% 70%;
                    opacity: 1;
                    }
                    70% {
                    -webkit-transform: scale(0.9);
                    transform: scale(0.9);
                    -webkit-transform-origin: 10% 70%;
                    transform-origin: 10% 70%;
                    opacity: 1;
                    }
                    100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    -webkit-transform-origin: 10% 70%;
                    transform-origin: 10% 70%;
                    opacity: 1;
                    }
                    }
                    
                    
                </style>
                
                <style>
                    body{
                    font-family: 'Gotham' !important;
                    }
                    
                    .center-me {
                    margin: 0 auto;
                    }
                    
                    .wrapper{
                    width:100%;
                    overflow: hidden;
                    position: relative;
                    top: 60px;
                    }
                    
                    .no-padding{
                    padding-right: 0px !important;
                    padding-left:0px !important;
                    }
                    
                    .menu{
                    position: fixed;
                    width: 100%;
                    z-index: 100000;
                    background-color: white;
                    }
                    
                    .menu .active{
                    background-color: #FFD899;
                    }
                    
                    .about{
                    color:#6f57a3;
                    width: 100%;
                    height:100%;
                    display: block;
                    padding: 20px;
                    text-decoration: none !important;
                    font-weight: 700;
                    }
                    
                    .login{
                    color:#d24e9a;
                    padding: 20px;
                    display: block;
                    width: 100%;
                    height:100%;
                    text-decoration: none !important;
                    font-weight: 700;
                    }
                    
                    .session{
                    color:#2b9263;
                    padding: 20px;
                    display: block;
                    width: 100%;
                    height:100%;
                    text-decoration: none !important;
                    font-weight: 700;
                    }
                    
                    .logo{
                    width: 100px;
                    }
                    
                    input{
                    font-family: 'Gotham Book' !important;
                    font-weight: lighter;
                    }
                    
                    @media (min-width: 1400px) {    
                    .logo{
                    
                    }
                    
                    .wrapper{
                    width:100%;
                    overflow: hidden;
                    position: relative;
                    top: 60px;
                    }
                    }
                    
                    
                </style>
                <style>
                    /*!
                    * Hamburgers
                    * @description Tasty CSS-animated hamburgers
                    * @author Jonathan Suh @jonsuh
                    * @site https://jonsuh.com/hamburgers
                    * @link https://github.com/jonsuh/hamburgers
                    */
                    .hamburger {
                    padding: 15px 15px;
                    display: inline-block;
                    cursor: pointer;
                    transition-property: opacity, filter;
                    transition-duration: 0.15s;
                    transition-timing-function: linear;
                    font: inherit;
                    color: inherit;
                    text-transform: none;
                    background-color: transparent;
                    border: 0;
                    margin: 0;
                    overflow: visible; }
                    .hamburger:hover {
                    opacity: 0.7; }
                    .hamburger.is-active:hover {
                    opacity: 0.7; }
                    .hamburger.is-active .hamburger-inner,
                    .hamburger.is-active .hamburger-inner::before,
                    .hamburger.is-active .hamburger-inner::after {
                    background-color: #000; }
                    
                    .hamburger-box {
                    width: 40px;
                    height: 24px;
                    display: inline-block;
                    position: relative; }
                    
                    .hamburger-inner {
                    display: block;
                    top: 50%;
                    margin-top: -2px; }
                    .hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
                    width: 40px;
                    height: 4px;
                    background-color: #000;
                    border-radius: 4px;
                    position: absolute;
                    transition-property: transform;
                    transition-duration: 0.15s;
                    transition-timing-function: ease; }
                    .hamburger-inner::before, .hamburger-inner::after {
                    content: "";
                    display: block; }
                    .hamburger-inner::before {
                    top: -10px; }
                    .hamburger-inner::after {
                    bottom: -10px; }
                    
                    /*
                    * 3DX
                    */
                    .hamburger--3dx .hamburger-box {
                    perspective: 80px; }
                    
                    .hamburger--3dx .hamburger-inner {
                    transition: transform 0.15s cubic-bezier(0.645, 0.045, 0.355, 1), background-color 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    .hamburger--3dx .hamburger-inner::before, .hamburger--3dx .hamburger-inner::after {
                    transition: transform 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    
                    .hamburger--3dx.is-active .hamburger-inner {
                    background-color: transparent !important;
                    transform: rotateY(180deg); }
                    .hamburger--3dx.is-active .hamburger-inner::before {
                    transform: translate3d(0, 10px, 0) rotate(45deg); }
                    .hamburger--3dx.is-active .hamburger-inner::after {
                    transform: translate3d(0, -10px, 0) rotate(-45deg); }
                    
                    /*
                    * 3DX Reverse
                    */
                    .hamburger--3dx-r .hamburger-box {
                    perspective: 80px; }
                    
                    .hamburger--3dx-r .hamburger-inner {
                    transition: transform 0.15s cubic-bezier(0.645, 0.045, 0.355, 1), background-color 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    .hamburger--3dx-r .hamburger-inner::before, .hamburger--3dx-r .hamburger-inner::after {
                    transition: transform 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    
                    .hamburger--3dx-r.is-active .hamburger-inner {
                    background-color: transparent !important;
                    transform: rotateY(-180deg); }
                    .hamburger--3dx-r.is-active .hamburger-inner::before {
                    transform: translate3d(0, 10px, 0) rotate(45deg); }
                    .hamburger--3dx-r.is-active .hamburger-inner::after {
                    transform: translate3d(0, -10px, 0) rotate(-45deg); }
                    
                    /*
                    * 3DY
                    */
                    .hamburger--3dy .hamburger-box {
                    perspective: 80px; }
                    
                    .hamburger--3dy .hamburger-inner {
                    transition: transform 0.15s cubic-bezier(0.645, 0.045, 0.355, 1), background-color 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    .hamburger--3dy .hamburger-inner::before, .hamburger--3dy .hamburger-inner::after {
                    transition: transform 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    
                    .hamburger--3dy.is-active .hamburger-inner {
                    background-color: transparent !important;
                    transform: rotateX(-180deg); }
                    .hamburger--3dy.is-active .hamburger-inner::before {
                    transform: translate3d(0, 10px, 0) rotate(45deg); }
                    .hamburger--3dy.is-active .hamburger-inner::after {
                    transform: translate3d(0, -10px, 0) rotate(-45deg); }
                    
                    /*
                    * 3DY Reverse
                    */
                    .hamburger--3dy-r .hamburger-box {
                    perspective: 80px; }
                    
                    .hamburger--3dy-r .hamburger-inner {
                    transition: transform 0.15s cubic-bezier(0.645, 0.045, 0.355, 1), background-color 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    .hamburger--3dy-r .hamburger-inner::before, .hamburger--3dy-r .hamburger-inner::after {
                    transition: transform 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    
                    .hamburger--3dy-r.is-active .hamburger-inner {
                    background-color: transparent !important;
                    transform: rotateX(180deg); }
                    .hamburger--3dy-r.is-active .hamburger-inner::before {
                    transform: translate3d(0, 10px, 0) rotate(45deg); }
                    .hamburger--3dy-r.is-active .hamburger-inner::after {
                    transform: translate3d(0, -10px, 0) rotate(-45deg); }
                    
                    /*
                    * 3DXY
                    */
                    .hamburger--3dxy .hamburger-box {
                    perspective: 80px; }
                    
                    .hamburger--3dxy .hamburger-inner {
                    transition: transform 0.15s cubic-bezier(0.645, 0.045, 0.355, 1), background-color 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    .hamburger--3dxy .hamburger-inner::before, .hamburger--3dxy .hamburger-inner::after {
                    transition: transform 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    
                    .hamburger--3dxy.is-active .hamburger-inner {
                    background-color: transparent !important;
                    transform: rotateX(180deg) rotateY(180deg); }
                    .hamburger--3dxy.is-active .hamburger-inner::before {
                    transform: translate3d(0, 10px, 0) rotate(45deg); }
                    .hamburger--3dxy.is-active .hamburger-inner::after {
                    transform: translate3d(0, -10px, 0) rotate(-45deg); }
                    
                    /*
                    * 3DXY Reverse
                    */
                    .hamburger--3dxy-r .hamburger-box {
                    perspective: 80px; }
                    
                    .hamburger--3dxy-r .hamburger-inner {
                    transition: transform 0.15s cubic-bezier(0.645, 0.045, 0.355, 1), background-color 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    .hamburger--3dxy-r .hamburger-inner::before, .hamburger--3dxy-r .hamburger-inner::after {
                    transition: transform 0s 0.1s cubic-bezier(0.645, 0.045, 0.355, 1); }
                    
                    .hamburger--3dxy-r.is-active .hamburger-inner {
                    background-color: transparent !important;
                    transform: rotateX(180deg) rotateY(180deg) rotateZ(-180deg); }
                    .hamburger--3dxy-r.is-active .hamburger-inner::before {
                    transform: translate3d(0, 10px, 0) rotate(45deg); }
                    .hamburger--3dxy-r.is-active .hamburger-inner::after {
                    transform: translate3d(0, -10px, 0) rotate(-45deg); }
                    
                    /*
                    * Arrow
                    */
                    .hamburger--arrow.is-active .hamburger-inner::before {
                    transform: translate3d(-8px, 0, 0) rotate(-45deg) scale(0.7, 1); }
                    
                    .hamburger--arrow.is-active .hamburger-inner::after {
                    transform: translate3d(-8px, 0, 0) rotate(45deg) scale(0.7, 1); }
                    
                    /*
                    * Arrow Right
                    */
                    .hamburger--arrow-r.is-active .hamburger-inner::before {
                    transform: translate3d(8px, 0, 0) rotate(45deg) scale(0.7, 1); }
                    
                    .hamburger--arrow-r.is-active .hamburger-inner::after {
                    transform: translate3d(8px, 0, 0) rotate(-45deg) scale(0.7, 1); }
                    
                    /*
                    * Arrow Alt
                    */
                    .hamburger--arrowalt .hamburger-inner::before {
                    transition: top 0.1s 0.1s ease, transform 0.1s cubic-bezier(0.165, 0.84, 0.44, 1); }
                    
                    .hamburger--arrowalt .hamburger-inner::after {
                    transition: bottom 0.1s 0.1s ease, transform 0.1s cubic-bezier(0.165, 0.84, 0.44, 1); }
                    
                    .hamburger--arrowalt.is-active .hamburger-inner::before {
                    top: 0;
                    transform: translate3d(-8px, -10px, 0) rotate(-45deg) scale(0.7, 1);
                    transition: top 0.1s ease, transform 0.1s 0.1s cubic-bezier(0.895, 0.03, 0.685, 0.22); }
                    
                    .hamburger--arrowalt.is-active .hamburger-inner::after {
                    bottom: 0;
                    transform: translate3d(-8px, 10px, 0) rotate(45deg) scale(0.7, 1);
                    transition: bottom 0.1s ease, transform 0.1s 0.1s cubic-bezier(0.895, 0.03, 0.685, 0.22); }
                    
                    /*
                    * Arrow Alt Right
                    */
                    .hamburger--arrowalt-r .hamburger-inner::before {
                    transition: top 0.1s 0.1s ease, transform 0.1s cubic-bezier(0.165, 0.84, 0.44, 1); }
                    
                    .hamburger--arrowalt-r .hamburger-inner::after {
                    transition: bottom 0.1s 0.1s ease, transform 0.1s cubic-bezier(0.165, 0.84, 0.44, 1); }
                    
                    .hamburger--arrowalt-r.is-active .hamburger-inner::before {
                    top: 0;
                    transform: translate3d(8px, -10px, 0) rotate(45deg) scale(0.7, 1);
                    transition: top 0.1s ease, transform 0.1s 0.1s cubic-bezier(0.895, 0.03, 0.685, 0.22); }
                    
                    .hamburger--arrowalt-r.is-active .hamburger-inner::after {
                    bottom: 0;
                    transform: translate3d(8px, 10px, 0) rotate(-45deg) scale(0.7, 1);
                    transition: bottom 0.1s ease, transform 0.1s 0.1s cubic-bezier(0.895, 0.03, 0.685, 0.22); }
                    
                    /*
                    * Arrow Turn
                    */
                    .hamburger--arrowturn.is-active .hamburger-inner {
                    transform: rotate(-180deg); }
                    .hamburger--arrowturn.is-active .hamburger-inner::before {
                    transform: translate3d(8px, 0, 0) rotate(45deg) scale(0.7, 1); }
                    .hamburger--arrowturn.is-active .hamburger-inner::after {
                    transform: translate3d(8px, 0, 0) rotate(-45deg) scale(0.7, 1); }
                    
                    /*
                    * Arrow Turn Right
                    */
                    .hamburger--arrowturn-r.is-active .hamburger-inner {
                    transform: rotate(-180deg); }
                    .hamburger--arrowturn-r.is-active .hamburger-inner::before {
                    transform: translate3d(-8px, 0, 0) rotate(-45deg) scale(0.7, 1); }
                    .hamburger--arrowturn-r.is-active .hamburger-inner::after {
                    transform: translate3d(-8px, 0, 0) rotate(45deg) scale(0.7, 1); }
                    
                    /*
                    * Boring
                    */
                    .hamburger--boring .hamburger-inner, .hamburger--boring .hamburger-inner::before, .hamburger--boring .hamburger-inner::after {
                    transition-property: none; }
                    
                    .hamburger--boring.is-active .hamburger-inner {
                    transform: rotate(45deg); }
                    .hamburger--boring.is-active .hamburger-inner::before {
                    top: 0;
                    opacity: 0; }
                    .hamburger--boring.is-active .hamburger-inner::after {
                    bottom: 0;
                    transform: rotate(-90deg); }
                    
                    /*
                    * Collapse
                    */
                    .hamburger--collapse .hamburger-inner {
                    top: auto;
                    bottom: 0;
                    transition-duration: 0.13s;
                    transition-delay: 0.13s;
                    transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    .hamburger--collapse .hamburger-inner::after {
                    top: -20px;
                    transition: top 0.2s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), opacity 0.1s linear; }
                    .hamburger--collapse .hamburger-inner::before {
                    transition: top 0.12s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), transform 0.13s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    
                    .hamburger--collapse.is-active .hamburger-inner {
                    transform: translate3d(0, -10px, 0) rotate(-45deg);
                    transition-delay: 0.22s;
                    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
                    .hamburger--collapse.is-active .hamburger-inner::after {
                    top: 0;
                    opacity: 0;
                    transition: top 0.2s cubic-bezier(0.33333, 0, 0.66667, 0.33333), opacity 0.1s 0.22s linear; }
                    .hamburger--collapse.is-active .hamburger-inner::before {
                    top: 0;
                    transform: rotate(-90deg);
                    transition: top 0.1s 0.16s cubic-bezier(0.33333, 0, 0.66667, 0.33333), transform 0.13s 0.25s cubic-bezier(0.215, 0.61, 0.355, 1); }
                    
                    /*
                    * Collapse Reverse
                    */
                    .hamburger--collapse-r .hamburger-inner {
                    top: auto;
                    bottom: 0;
                    transition-duration: 0.13s;
                    transition-delay: 0.13s;
                    transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    .hamburger--collapse-r .hamburger-inner::after {
                    top: -20px;
                    transition: top 0.2s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), opacity 0.1s linear; }
                    .hamburger--collapse-r .hamburger-inner::before {
                    transition: top 0.12s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), transform 0.13s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    
                    .hamburger--collapse-r.is-active .hamburger-inner {
                    transform: translate3d(0, -10px, 0) rotate(45deg);
                    transition-delay: 0.22s;
                    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
                    .hamburger--collapse-r.is-active .hamburger-inner::after {
                    top: 0;
                    opacity: 0;
                    transition: top 0.2s cubic-bezier(0.33333, 0, 0.66667, 0.33333), opacity 0.1s 0.22s linear; }
                    .hamburger--collapse-r.is-active .hamburger-inner::before {
                    top: 0;
                    transform: rotate(90deg);
                    transition: top 0.1s 0.16s cubic-bezier(0.33333, 0, 0.66667, 0.33333), transform 0.13s 0.25s cubic-bezier(0.215, 0.61, 0.355, 1); }
                    
                    /*
                    * Elastic
                    */
                    .hamburger--elastic .hamburger-inner {
                    top: 2px;
                    transition-duration: 0.275s;
                    transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55); }
                    .hamburger--elastic .hamburger-inner::before {
                    top: 10px;
                    transition: opacity 0.125s 0.275s ease; }
                    .hamburger--elastic .hamburger-inner::after {
                    top: 20px;
                    transition: transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55); }
                    
                    .hamburger--elastic.is-active .hamburger-inner {
                    transform: translate3d(0, 10px, 0) rotate(135deg);
                    transition-delay: 0.075s; }
                    .hamburger--elastic.is-active .hamburger-inner::before {
                    transition-delay: 0s;
                    opacity: 0; }
                    .hamburger--elastic.is-active .hamburger-inner::after {
                    transform: translate3d(0, -20px, 0) rotate(-270deg);
                    transition-delay: 0.075s; }
                    
                    /*
                    * Elastic Reverse
                    */
                    .hamburger--elastic-r .hamburger-inner {
                    top: 2px;
                    transition-duration: 0.275s;
                    transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55); }
                    .hamburger--elastic-r .hamburger-inner::before {
                    top: 10px;
                    transition: opacity 0.125s 0.275s ease; }
                    .hamburger--elastic-r .hamburger-inner::after {
                    top: 20px;
                    transition: transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55); }
                    
                    .hamburger--elastic-r.is-active .hamburger-inner {
                    transform: translate3d(0, 10px, 0) rotate(-135deg);
                    transition-delay: 0.075s; }
                    .hamburger--elastic-r.is-active .hamburger-inner::before {
                    transition-delay: 0s;
                    opacity: 0; }
                    .hamburger--elastic-r.is-active .hamburger-inner::after {
                    transform: translate3d(0, -20px, 0) rotate(270deg);
                    transition-delay: 0.075s; }
                    
                    /*
                    * Emphatic
                    */
                    .hamburger--emphatic {
                    overflow: hidden; }
                    .hamburger--emphatic .hamburger-inner {
                    transition: background-color 0.125s 0.175s ease-in; }
                    .hamburger--emphatic .hamburger-inner::before {
                    left: 0;
                    transition: transform 0.125s cubic-bezier(0.6, 0.04, 0.98, 0.335), top 0.05s 0.125s linear, left 0.125s 0.175s ease-in; }
                    .hamburger--emphatic .hamburger-inner::after {
                    top: 10px;
                    right: 0;
                    transition: transform 0.125s cubic-bezier(0.6, 0.04, 0.98, 0.335), top 0.05s 0.125s linear, right 0.125s 0.175s ease-in; }
                    .hamburger--emphatic.is-active .hamburger-inner {
                    transition-delay: 0s;
                    transition-timing-function: ease-out;
                    background-color: transparent !important; }
                    .hamburger--emphatic.is-active .hamburger-inner::before {
                    left: -80px;
                    top: -80px;
                    transform: translate3d(80px, 80px, 0) rotate(45deg);
                    transition: left 0.125s ease-out, top 0.05s 0.125s linear, transform 0.125s 0.175s cubic-bezier(0.075, 0.82, 0.165, 1); }
                    .hamburger--emphatic.is-active .hamburger-inner::after {
                    right: -80px;
                    top: -80px;
                    transform: translate3d(-80px, 80px, 0) rotate(-45deg);
                    transition: right 0.125s ease-out, top 0.05s 0.125s linear, transform 0.125s 0.175s cubic-bezier(0.075, 0.82, 0.165, 1); }
                    
                    /*
                    * Emphatic Reverse
                    */
                    .hamburger--emphatic-r {
                    overflow: hidden; }
                    .hamburger--emphatic-r .hamburger-inner {
                    transition: background-color 0.125s 0.175s ease-in; }
                    .hamburger--emphatic-r .hamburger-inner::before {
                    left: 0;
                    transition: transform 0.125s cubic-bezier(0.6, 0.04, 0.98, 0.335), top 0.05s 0.125s linear, left 0.125s 0.175s ease-in; }
                    .hamburger--emphatic-r .hamburger-inner::after {
                    top: 10px;
                    right: 0;
                    transition: transform 0.125s cubic-bezier(0.6, 0.04, 0.98, 0.335), top 0.05s 0.125s linear, right 0.125s 0.175s ease-in; }
                    .hamburger--emphatic-r.is-active .hamburger-inner {
                    transition-delay: 0s;
                    transition-timing-function: ease-out;
                    background-color: transparent !important; }
                    .hamburger--emphatic-r.is-active .hamburger-inner::before {
                    left: -80px;
                    top: 80px;
                    transform: translate3d(80px, -80px, 0) rotate(-45deg);
                    transition: left 0.125s ease-out, top 0.05s 0.125s linear, transform 0.125s 0.175s cubic-bezier(0.075, 0.82, 0.165, 1); }
                    .hamburger--emphatic-r.is-active .hamburger-inner::after {
                    right: -80px;
                    top: 80px;
                    transform: translate3d(-80px, -80px, 0) rotate(45deg);
                    transition: right 0.125s ease-out, top 0.05s 0.125s linear, transform 0.125s 0.175s cubic-bezier(0.075, 0.82, 0.165, 1); }
                    
                    /*
                    * Minus
                    */
                    .hamburger--minus .hamburger-inner::before, .hamburger--minus .hamburger-inner::after {
                    transition: bottom 0.08s 0s ease-out, top 0.08s 0s ease-out, opacity 0s linear; }
                    
                    .hamburger--minus.is-active .hamburger-inner::before, .hamburger--minus.is-active .hamburger-inner::after {
                    opacity: 0;
                    transition: bottom 0.08s ease-out, top 0.08s ease-out, opacity 0s 0.08s linear; }
                    
                    .hamburger--minus.is-active .hamburger-inner::before {
                    top: 0; }
                    
                    .hamburger--minus.is-active .hamburger-inner::after {
                    bottom: 0; }
                    
                    /*
                    * Slider
                    */
                    .hamburger--slider .hamburger-inner {
                    top: 2px; }
                    .hamburger--slider .hamburger-inner::before {
                    top: 10px;
                    transition-property: transform, opacity;
                    transition-timing-function: ease;
                    transition-duration: 0.15s; }
                    .hamburger--slider .hamburger-inner::after {
                    top: 20px; }
                    
                    .hamburger--slider.is-active .hamburger-inner {
                    transform: translate3d(0, 10px, 0) rotate(45deg); }
                    .hamburger--slider.is-active .hamburger-inner::before {
                    transform: rotate(-45deg) translate3d(-5.71429px, -6px, 0);
                    opacity: 0; }
                    .hamburger--slider.is-active .hamburger-inner::after {
                    transform: translate3d(0, -20px, 0) rotate(-90deg); }
                    
                    /*
                    * Slider Reverse
                    */
                    .hamburger--slider-r .hamburger-inner {
                    top: 2px; }
                    .hamburger--slider-r .hamburger-inner::before {
                    top: 10px;
                    transition-property: transform, opacity;
                    transition-timing-function: ease;
                    transition-duration: 0.15s; }
                    .hamburger--slider-r .hamburger-inner::after {
                    top: 20px; }
                    
                    .hamburger--slider-r.is-active .hamburger-inner {
                    transform: translate3d(0, 10px, 0) rotate(-45deg); }
                    .hamburger--slider-r.is-active .hamburger-inner::before {
                    transform: rotate(45deg) translate3d(5.71429px, -6px, 0);
                    opacity: 0; }
                    .hamburger--slider-r.is-active .hamburger-inner::after {
                    transform: translate3d(0, -20px, 0) rotate(90deg); }
                    
                    /*
                    * Spin
                    */
                    .hamburger--spin .hamburger-inner {
                    transition-duration: 0.22s;
                    transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    .hamburger--spin .hamburger-inner::before {
                    transition: top 0.1s 0.25s ease-in, opacity 0.1s ease-in; }
                    .hamburger--spin .hamburger-inner::after {
                    transition: bottom 0.1s 0.25s ease-in, transform 0.22s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    
                    .hamburger--spin.is-active .hamburger-inner {
                    transform: rotate(225deg);
                    transition-delay: 0.12s;
                    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
                    .hamburger--spin.is-active .hamburger-inner::before {
                    top: 0;
                    opacity: 0;
                    transition: top 0.1s ease-out, opacity 0.1s 0.12s ease-out; }
                    .hamburger--spin.is-active .hamburger-inner::after {
                    bottom: 0;
                    transform: rotate(-90deg);
                    transition: bottom 0.1s ease-out, transform 0.22s 0.12s cubic-bezier(0.215, 0.61, 0.355, 1); }
                    
                    /*
                    * Spin Reverse
                    */
                    .hamburger--spin-r .hamburger-inner {
                    transition-duration: 0.22s;
                    transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    .hamburger--spin-r .hamburger-inner::before {
                    transition: top 0.1s 0.25s ease-in, opacity 0.1s ease-in; }
                    .hamburger--spin-r .hamburger-inner::after {
                    transition: bottom 0.1s 0.25s ease-in, transform 0.22s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    
                    .hamburger--spin-r.is-active .hamburger-inner {
                    transform: rotate(-225deg);
                    transition-delay: 0.12s;
                    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
                    .hamburger--spin-r.is-active .hamburger-inner::before {
                    top: 0;
                    opacity: 0;
                    transition: top 0.1s ease-out, opacity 0.1s 0.12s ease-out; }
                    .hamburger--spin-r.is-active .hamburger-inner::after {
                    bottom: 0;
                    transform: rotate(90deg);
                    transition: bottom 0.1s ease-out, transform 0.22s 0.12s cubic-bezier(0.215, 0.61, 0.355, 1); }
                    
                    /*
                    * Spring
                    */
                    .hamburger--spring .hamburger-inner {
                    top: 2px;
                    transition: background-color 0s 0.13s linear; }
                    .hamburger--spring .hamburger-inner::before {
                    top: 10px;
                    transition: top 0.1s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), transform 0.13s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    .hamburger--spring .hamburger-inner::after {
                    top: 20px;
                    transition: top 0.2s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), transform 0.13s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    
                    .hamburger--spring.is-active .hamburger-inner {
                    transition-delay: 0.22s;
                    background-color: transparent !important; }
                    .hamburger--spring.is-active .hamburger-inner::before {
                    top: 0;
                    transition: top 0.1s 0.15s cubic-bezier(0.33333, 0, 0.66667, 0.33333), transform 0.13s 0.22s cubic-bezier(0.215, 0.61, 0.355, 1);
                    transform: translate3d(0, 10px, 0) rotate(45deg); }
                    .hamburger--spring.is-active .hamburger-inner::after {
                    top: 0;
                    transition: top 0.2s cubic-bezier(0.33333, 0, 0.66667, 0.33333), transform 0.13s 0.22s cubic-bezier(0.215, 0.61, 0.355, 1);
                    transform: translate3d(0, 10px, 0) rotate(-45deg); }
                    
                    /*
                    * Spring Reverse
                    */
                    .hamburger--spring-r .hamburger-inner {
                    top: auto;
                    bottom: 0;
                    transition-duration: 0.13s;
                    transition-delay: 0s;
                    transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    .hamburger--spring-r .hamburger-inner::after {
                    top: -20px;
                    transition: top 0.2s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), opacity 0s linear; }
                    .hamburger--spring-r .hamburger-inner::before {
                    transition: top 0.1s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), transform 0.13s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    
                    .hamburger--spring-r.is-active .hamburger-inner {
                    transform: translate3d(0, -10px, 0) rotate(-45deg);
                    transition-delay: 0.22s;
                    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
                    .hamburger--spring-r.is-active .hamburger-inner::after {
                    top: 0;
                    opacity: 0;
                    transition: top 0.2s cubic-bezier(0.33333, 0, 0.66667, 0.33333), opacity 0s 0.22s linear; }
                    .hamburger--spring-r.is-active .hamburger-inner::before {
                    top: 0;
                    transform: rotate(90deg);
                    transition: top 0.1s 0.15s cubic-bezier(0.33333, 0, 0.66667, 0.33333), transform 0.13s 0.22s cubic-bezier(0.215, 0.61, 0.355, 1); }
                    
                    /*
                    * Stand
                    */
                    .hamburger--stand .hamburger-inner {
                    transition: transform 0.075s 0.15s cubic-bezier(0.55, 0.055, 0.675, 0.19), background-color 0s 0.075s linear; }
                    .hamburger--stand .hamburger-inner::before {
                    transition: top 0.075s 0.075s ease-in, transform 0.075s 0s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    .hamburger--stand .hamburger-inner::after {
                    transition: bottom 0.075s 0.075s ease-in, transform 0.075s 0s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    
                    .hamburger--stand.is-active .hamburger-inner {
                    transform: rotate(90deg);
                    background-color: transparent !important;
                    transition: transform 0.075s 0s cubic-bezier(0.215, 0.61, 0.355, 1), background-color 0s 0.15s linear; }
                    .hamburger--stand.is-active .hamburger-inner::before {
                    top: 0;
                    transform: rotate(-45deg);
                    transition: top 0.075s 0.1s ease-out, transform 0.075s 0.15s cubic-bezier(0.215, 0.61, 0.355, 1); }
                    .hamburger--stand.is-active .hamburger-inner::after {
                    bottom: 0;
                    transform: rotate(45deg);
                    transition: bottom 0.075s 0.1s ease-out, transform 0.075s 0.15s cubic-bezier(0.215, 0.61, 0.355, 1); }
                    
                    /*
                    * Stand Reverse
                    */
                    .hamburger--stand-r .hamburger-inner {
                    transition: transform 0.075s 0.15s cubic-bezier(0.55, 0.055, 0.675, 0.19), background-color 0s 0.075s linear; }
                    .hamburger--stand-r .hamburger-inner::before {
                    transition: top 0.075s 0.075s ease-in, transform 0.075s 0s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    .hamburger--stand-r .hamburger-inner::after {
                    transition: bottom 0.075s 0.075s ease-in, transform 0.075s 0s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    
                    .hamburger--stand-r.is-active .hamburger-inner {
                    transform: rotate(-90deg);
                    background-color: transparent !important;
                    transition: transform 0.075s 0s cubic-bezier(0.215, 0.61, 0.355, 1), background-color 0s 0.15s linear; }
                    .hamburger--stand-r.is-active .hamburger-inner::before {
                    top: 0;
                    transform: rotate(-45deg);
                    transition: top 0.075s 0.1s ease-out, transform 0.075s 0.15s cubic-bezier(0.215, 0.61, 0.355, 1); }
                    .hamburger--stand-r.is-active .hamburger-inner::after {
                    bottom: 0;
                    transform: rotate(45deg);
                    transition: bottom 0.075s 0.1s ease-out, transform 0.075s 0.15s cubic-bezier(0.215, 0.61, 0.355, 1); }
                    
                    /*
                    * Squeeze
                    */
                    .hamburger--squeeze .hamburger-inner {
                    transition-duration: 0.075s;
                    transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    .hamburger--squeeze .hamburger-inner::before {
                    transition: top 0.075s 0.12s ease, opacity 0.075s ease; }
                    .hamburger--squeeze .hamburger-inner::after {
                    transition: bottom 0.075s 0.12s ease, transform 0.075s cubic-bezier(0.55, 0.055, 0.675, 0.19); }
                    
                    .hamburger--squeeze.is-active .hamburger-inner {
                    transform: rotate(45deg);
                    transition-delay: 0.12s;
                    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
                    .hamburger--squeeze.is-active .hamburger-inner::before {
                    top: 0;
                    opacity: 0;
                    transition: top 0.075s ease, opacity 0.075s 0.12s ease; }
                    .hamburger--squeeze.is-active .hamburger-inner::after {
                    bottom: 0;
                    transform: rotate(-90deg);
                    transition: bottom 0.075s ease, transform 0.075s 0.12s cubic-bezier(0.215, 0.61, 0.355, 1); }
                    
                    /*
                    * Vortex
                    */
                    .hamburger--vortex .hamburger-inner {
                    transition-duration: 0.2s;
                    transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1); }
                    .hamburger--vortex .hamburger-inner::before, .hamburger--vortex .hamburger-inner::after {
                    transition-duration: 0s;
                    transition-delay: 0.1s;
                    transition-timing-function: linear; }
                    .hamburger--vortex .hamburger-inner::before {
                    transition-property: top, opacity; }
                    .hamburger--vortex .hamburger-inner::after {
                    transition-property: bottom, transform; }
                    
                    .hamburger--vortex.is-active .hamburger-inner {
                    transform: rotate(765deg);
                    transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1); }
                    .hamburger--vortex.is-active .hamburger-inner::before, .hamburger--vortex.is-active .hamburger-inner::after {
                    transition-delay: 0s; }
                    .hamburger--vortex.is-active .hamburger-inner::before {
                    top: 0;
                    opacity: 0; }
                    .hamburger--vortex.is-active .hamburger-inner::after {
                    bottom: 0;
                    transform: rotate(90deg); }
                    
                    /*
                    * Vortex Reverse
                    */
                    .hamburger--vortex-r .hamburger-inner {
                    transition-duration: 0.2s;
                    transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1); }
                    .hamburger--vortex-r .hamburger-inner::before, .hamburger--vortex-r .hamburger-inner::after {
                    transition-duration: 0s;
                    transition-delay: 0.1s;
                    transition-timing-function: linear; }
                    .hamburger--vortex-r .hamburger-inner::before {
                    transition-property: top, opacity; }
                    .hamburger--vortex-r .hamburger-inner::after {
                    transition-property: bottom, transform; }
                    
                    .hamburger--vortex-r.is-active .hamburger-inner {
                    transform: rotate(-765deg);
                    transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1); }
                    .hamburger--vortex-r.is-active .hamburger-inner::before, .hamburger--vortex-r.is-active .hamburger-inner::after {
                    transition-delay: 0s; }
                    .hamburger--vortex-r.is-active .hamburger-inner::before {
                    top: 0;
                    opacity: 0; }
                    .hamburger--vortex-r.is-active .hamburger-inner::after {
                    bottom: 0;
                    transform: rotate(-90deg); }
                </style>
                
                <style>
                    
                </style>
                
                
                
                <script type="application/javascript">
                    var gray = false;
                    $(document).ready(function(){
                    setChoose(1);
                    $(window).scroll(function () {
                    scrollView();
                    });
                    scrollView();
                    
                    setInputFilter(document.getElementById("phone"), function(value) {
                    return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
                    });
                    });
                    
                    function scrollView() {
                    if(!gray){
                    var hT = $('.section7').offset().top,
                    hH = $('.section7').outerHeight(),
                    wH = $(window).height(),
                    wS = $(this).scrollTop();
                    var onGrid = wS > (hT-(hH/2));
                    if (onGrid) {
                    gray = true;
                    $(".grid1").addClass("animate-grayscale1");
                    $(".grid2").addClass("animate-grayscale2");
                    $(".grid3").addClass("animate-grayscale1");
                    $(".grid4").addClass("animate-grayscale2");
                    $(".grid5").addClass("animate-grayscale1");
                    $(".grid6").addClass("animate-grayscale2");
                    }
                    }
                    }
                    
                    function setInputFilter(textbox, inputFilter) {
                    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
                    textbox.addEventListener(event, function() {
                    if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    } else {
                    this.value = "";
                    }
                    });
                    });
                    }
                    
                    function setChoose(index){
                    hideAllContent();
                    $("#chooser"+index).addClass("active");
                    $("#content"+index).show();
                    }
                    
                    function hideAllContent(){
                    for(var i=1;i<8;i++){
                    $("#chooser"+i).removeClass("active");
                    $("#content"+i).hide();
                    }
                    }
                    
                    function scrollToDiv($class) {
                    $('html, body').animate({
                    scrollTop: $("#" + $class + "-section").offset().top - 100
                    }, 800);
                    }
                </script>
                
                <div class="menu">
                    <div class="row">
                        <div class="col align-self-center text-left text-sm-left text-md-center">
                            <a href="http://youthday.holytrinitycarmel.com"><img src="assets/images/logo.png" style="margin:10px;" class="logo" height="40px"></a>
                            </div>
                            <div class="col align-self-center text-center d-none d-md-block">
                                <a href="#" onclick="scrollToDiv('login');" class="login">Login/Register</a>
                            </div>
                            <div class="col align-self-center text-center d-none d-md-block">
                                <a href="#" onclick="scrollToDiv('about');" class="about">About</a>
                            </div>
                            <div class="col align-self-center text-center d-none d-md-block">
                                <a href="#" onclick="scrollToDiv('session');" class="session">Session</a>
                            </div>
                            <div class="col d-md-none text-right align-self-center">
                                <button class="navbar-toggler hamburger hamburger--collapse" style="padding:20px;" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="collapse d-md-none" id="navbarToggleExternalContent">
                            <div class="p-4" style="background-color:#fce9cc">
                                <div class="col align-self-center text-center">
                                    <a href="#" onclick="scrollToDiv('login');" class="login">Login/Register</a>
                                </div>
                                <div class="col align-self-center text-center">
                                    <a href="#" onclick="scrollToDiv('about');" class="about">About</a>
                                </div>
                                <div class="col align-self-center text-center">
                                    <a href="#" onclick="scrollToDiv('session');" class="session">Session</a>
                                </div>
                            </div>
                        </div>
                    </div></div>
                </div>
                
            </div>
        </div>
    </div>
    
    <div  class="">
        <div class="">
            
            <div class="row ">
                
                <div class="col-md-12 comp-grid">
                    <div class=""><style>
                        .section1{
                        position: relative;
                        height:auto;
                        }
                        
                        .section1 .section1-back{
                        position: relative;
                        width: 100%;
                        overflow: hidden;
                        /*background-image: url('assets/images/section1_back.png');
                        background-size: 100% auto;*/
                        }
                        
                        .section1 .section1-logo-wrapper{
                        width: 100%;
                        position: absolute;
                        padding:0px;
                        top:0px;
                        
                        }
                        .section1 .section1-logo-wrapper .section1-logo-frame{
                        position: relative;
                        width: 100%;
                        max-width: 550px;
                        height: 100%;
                        max-height: 550px;
                        }
                        
                        .section1 .section1-logo-wrapper .section1-logo-frame img{
                        position: absolute;
                        display: block;
                        }
                        
                        
                        .section1 .section1-back img{
                        position: relative;
                        width: 100%;
                        left:0%;
                        height: 100%;
                        max-height: 250px;
                        margin-top:24%;
                        }
                        
                        @media (min-width: 200px) {    
                        .section1 .section1-logo-wrapper{
                        width: 100%;
                        position: absolute;
                        padding:20px;
                        top:0px;
                        }
                        
                        .section1 .section1-logo-wrapper .section1-logo-frame{
                        position: relative;
                        width: 100%;
                        max-width: 410px;
                        height: 100%;
                        max-height: 410px;
                        }
                        
                        .section1 .section1-back img{
                        position: relative;
                        width: 100%;
                        left:0%;
                        height: 100%px;
                        max-height: 380px;
                        margin-top:21%;
                        }
                        }
                        
                        @media (min-width: 330px) {    
                        .section1 .logo-wrapper{
                        width: 100%;
                        position: absolute;
                        padding:20px;
                        top:0px;
                        }
                        
                        .section1 .section1-logo-wrapper .section1-logo-frame{
                        position: relative;
                        width: 100%;
                        max-width: 410px;
                        height: 100%;
                        max-height: 410px;
                        }
                        
                        .section1 .section1-back img{
                        position: relative;
                        width: 100%;
                        left:0%;
                        height: 100%px;
                        max-height: 490px;
                        margin-top:18%;
                        
                        }
                        }
                        
                        @media (min-width: 400px) {    
                        .section1 .logo-wrapper{
                        width: 100%;
                        position: absolute;
                        padding:20px;
                        top:0px;
                        }
                        
                        .section1 .section1-logo-wrapper .section1-logo-frame{
                        position: relative;
                        width: 100%;
                        max-width: 410px;
                        height: 100%;
                        max-height: 410px;
                        }
                        
                        .section1 .section1-back img{
                        position: relative;
                        width: 100%;
                        left:0%;
                        height: 100%;
                        max-height: 650px;
                        margin-top:16%;
                        }
                        }
                        
                        @media (min-width: 460px) {    
                        .section1 .section1-logo-wrapper{
                        width: 100%;
                        position: absolute;
                        padding:15px;
                        top:0px;
                        }
                        
                        .section1 .section1-logo-wrapper .section1-logo-frame{
                        position: relative;
                        width: 100%;
                        max-width: 500px;
                        height: 100%;
                        max-height: 500px;
                        }
                        
                        .section1 .section1-back img{
                        position: relative;
                        width: 100%;
                        left:0%;
                        height: 100%;
                        max-height: 800px;
                        margin-top:13%;
                        }
                        }
                        
                        @media (min-width: 480px) {    
                        .section1 .section1-logo-wrapper{
                        width: 100%;
                        position: absolute;
                        padding:15px;
                        top:0px;
                        }
                        
                        .section1 .section1-logo-wrapper .section1-logo-frame{
                        position: relative;
                        width: 100%;
                        max-width: 500px;
                        height: 100%;
                        max-height: 500px;
                        }
                        
                        .section1 .section1-back img{
                        position: relative;
                        width: 100%;
                        left:0%;
                        height: 100%;
                        max-height: 900px;
                        margin-top:10%;
                        }
                        }
                        
                        @media (min-width: 540px) {    
                        .section1 .section1-logo-wrapper{
                        width: 100%;
                        position: absolute;
                        padding:25px;
                        top:0px;
                        }
                        
                        .section1 .section1-logo-wrapper .section1-logo-frame{
                        position: relative;
                        width: 100%;
                        max-width: 550px;
                        height: 100%;
                        max-height: 550px;
                        }
                        
                        .section1 .section1-back img{
                        position: relative;
                        width: 100%;
                        left:0%;
                        height: 100%;
                        max-height: 1000px;
                        margin-top:7%;
                        }
                        }
                        
                        @media (min-width: 740px) {    
                        .section1 .section1-logo-wrapper{
                        width: 100%;
                        position: absolute;
                        padding:25px;
                        top:0px;
                        }
                        
                        .section1 .section1-logo-wrapper .section1-logo-frame{
                        position: relative;
                        width: 100%;
                        max-width: 700px;
                        height: 100%;
                        max-height: 700px;
                        }
                        
                        .section1 .section1-back img{
                        position: relative;
                        width: 100%;
                        left:0%;
                        height: 100%;
                        max-height: 1300px;
                        margin-top:4%;
                        }
                        }
                        
                        @media (min-width: 1024px) {    
                        .section1 .section1-logo-wrapper{
                        width: 100%;
                        position: absolute;
                        padding:25px;
                        top:0px;
                        }
                        
                        .section1 .section1-logo-wrapper .section1-logo-frame{
                        position: relative;
                        width: 100%;
                        max-width: 700px;
                        height: 100%;
                        max-height: 700px;
                        }
                        
                        .section1 .section1-back img{
                        position: relative;
                        width: 100%;
                        left:0%;
                        height: 100%;
                        max-height: 1500px;
                        margin-top:4%;
                        }
                        }
                        
                        @media (min-width: 1400px) {    
                        .section1 .section1-logo-wrapper{
                        width: 100%;
                        position: absolute;
                        padding:25px;
                        top:0px;
                        }
                        
                        .section1 .section1-logo-wrapper .section1-logo-frame{
                        position: relative;
                        width: 100%;
                        max-width: 840px;
                        height: 100%;
                        max-height: 840px;
                        }
                        
                        .section1 .section1-back img{
                        position: relative;
                        left:0%;
                        width:100%;
                        height:100%;
                        max-height:2680px;
                        margin-top:4%;
                        }
                        }
                        
                    </style>
                    <section class="page">
                        <div class="section1">
                            <div class="section1-back">
                                <img src="assets/images/A3 GABUNGAN.jpg" width="100%">
                                </div>
                                <!--<div class="section1-logo-wrapper">
                                    <div class="section1-logo-frame center-me">
                                        <img src="assets/images/" width="100%" class="animate-9">
                                            <img src="assets/images/" width="100%" class="animate-8">
                                                <img src="assets/images/" width="100%" class="animate-7">
                                                    <img src="assets/images/" width="100%" class="animate-6">
                                                        <img src="assets/images/" width="100%" class="animate-5">
                                                            <img src="assets/images/" width="100%">
                                                                <img src="assets/images/" width="100%" class="animate-3">
                                                                    <img src="assets/images/" width="100%" class="animate-2">
                                                                        <img src="assets/images/" width="100%" class="animate-1">
                                                                        </div>
                                                                    </div> -->
                                                                    
                                                                </div>
                                                            </section>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div  class="">
                                            <div class="">
                                                
                                                <div class="row ">
                                                    
                                                    <div class="col-md-12 comp-grid">
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div  class="">
                                            <div class="">
                                                
                                                <div class="row ">
                                                    
                                                    <div class="col-md-12 comp-grid">
                                                        <div class=""><style>
                                                            .section2-title{
                                                            font-family: 'Muro';
                                                            font-weight: 900;
                                                            font-style: normal;
                                                            }
                                                            
                                                            .section2-login{
                                                            background-color: #2b9263;
                                                            padding-left:40px;
                                                            padding-right:40px;
                                                            padding-top:40px;
                                                            padding-bottom:10px;
                                                            }
                                                            
                                                            .section2-register{
                                                            background-color: #1a9cd6;
                                                            padding-left:40px;
                                                            padding-right:40px;
                                                            padding-top:40px;
                                                            padding-bottom:10px;
                                                            }
                                                            
                                                            .section2-login-form{
                                                            color:white;
                                                            padding-left:50px;
                                                            padding-right: 50px;
                                                            padding-top:30px;
                                                            }
                                                            
                                                            .section2-register-form{
                                                            color:white;
                                                            padding-left:50px;
                                                            padding-right: 50px;
                                                            padding-top:30px;
                                                            }
                                                            
                                                            .section2-login-btn{
                                                            background-image: url("../images/login.png");
                                                            background-repeat: no-repeat;
                                                            border:none;
                                                            display: inline-block;
                                                            background-color: Transparent;
                                                            width:189px;
                                                            height:81px;
                                                            background-size: 100% 100%;
                                                            }
                                                            
                                                            .section2-login-btn:hover{
                                                            width:189;
                                                            height:81px;
                                                            background-image: url("../images/login_press.png");
                                                            background-repeat: no-repeat;
                                                            }
                                                            
                                                            .section2-register-btn{
                                                            background-image: url("../images/register.png");
                                                            background-repeat: no-repeat;
                                                            border:none;
                                                            display: inline-block;
                                                            background-color: Transparent;
                                                            width:230px;
                                                            height:83px;
                                                            background-size: 100% 100%;
                                                            }
                                                            
                                                            .section2-register-btn:hover{
                                                            width:230px;
                                                            height:83px;
                                                            background-image: url("../images/register_press.png");
                                                            background-repeat: no-repeat;
                                                            }
                                                            
                                                            .section2-link{
                                                            text-decoration: none;
                                                            color:#f8acac;
                                                            }
                                                            
                                                            .section2-link:hover{
                                                            text-decoration: underline;
                                                            color:#f8acac;
                                                            }
                                                            
                                                        </style>
                                                        
                                                        <div class="section2" id="login-section">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6 section2-login" style="color:white;">
                                                                    <center>
                                                                        <!-- <h1 class="section2-title align-self-center" style="color:white">LOGIN HERE</h1> -->
                                                                        <h4><i class="fa fa-key"></i>Login</h4>
                                                                    </center>
                                                                    <p>
                                                                        
                                                                        <!-- mulai login -->
                                                                        <?php $this :: display_page_errors(); ?>
                                                                        
                                                                        
                                                                        
                                                                        <div>
                                                                            
                                                                            <?php 
                                                                            $this :: display_page_errors(); 
                                                                            ?>
                                                                            <form name="loginForm" action="<?php print_link('index/login/?csrf_token=' . Csrf :: $token); ?>" class="needs-validation section2-login-form" method="post"> 
                                                                                <label for="username">Username</label><br>
                                                                                    <div class="input-group form-group">
                                                                                        
                                                                                        
                                                                                        <input placeholder="Enter Username or Email Address" name="username"  required="required" class="form-control" type="text"  />
                                                                                        <div class="input-group-append">
                                                                                            <span class="input-group-text"><i class="form-control-feedback fa fa-user"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <label for="password">Password</label><br>
                                                                                        <div class="input-group form-group">
                                                                                            
                                                                                            
                                                                                            <input  placeholder="Enter your password" required="required" v-model="user.password" name="password" class="form-control" type="password" />
                                                                                            <div class="input-group-append">
                                                                                                <span class="input-group-text"><i class="form-control-feedback fa fa-key"></i></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix mt-3 mb-3">
                                                                                            
                                                                                            <div class="form-group form-check">
                                                                                                <label class="form-check-label">
                                                                                                    <input value="true" type="checkbox" name="rememberme"  class="form-check-input" />
                                                                                                    Remember password
                                                                                                </label>
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        <div class="form-group text-center">
                                                                                            <button class="btn btn-primary btn-block btn-md" type="submit"> 
                                                                                                <i class="load-indicator">
                                                                                                    <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader> 
                                                                                                </i>
                                                                                                Login
                                                                                            </button>
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        <!--   <div class="text-center">
                                                                                            Dont you have an account?  <a href="<?php print_link("index/register") ?>" class="btn btn-success">Register
                                                                                            <i class="fa fa-user"></i></a>
                                                                                        </div> -->
                                                                                        
                                                                                    </form>
                                                                                </div>
                                                                                
                                                                                
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-6 col-lg-6 section2-register" style="color:white;">
                                                                            <!-- register mulai -->
                                                                            <center>
                                                                                <!-- <h1 class="section2-title align-self-center" style="color:white">LOGIN HERE</h1> -->
                                                                                <h4><i class="fa fa-key"></i>Register</h4>
                                                                            </center>
                                                                            <p>
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                <?php 
                                                                                
                                                                                $timezone  = +7; //(GMT +700) EST (U.S. & Canada)
                                                                                $a=gmdate("M d, Y H:i:s", time() + 3600*($timezone+date("I")));
                                                                                
                                                                                
                                                                                //$b= '2020-02-12 21:28:00';
                                                                                //$b= 'Feb 14, 2020 23:59:59';
                                                                                //$b= 'Feb 11, 2020 22:03:59';
                                                                                //echo $a;
                                                                                // echo "<br>";
                                                                                    //echo $b;
                                                                                    //echo "<br>";
                                                                                        $b="Feb 15, 2020 00:00:00";
                                                                                        $dateTimestamp1 = strtotime($a);
                                                                                        $dateTimestamp2 = strtotime($b);
                                                                                        // echo  $dateTimestamp1;
                                                                                        // echo "<br>";
                                                                                            // echo $dateTimestamp2;
                                                                                            if ( $dateTimestamp1 > $dateTimestamp2) { 
                                                                                            
                                                                                            ?>
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            <form id="akun-userregister-form" role="form" novalidate enctype="multipart/form-data" class="form form-vertical needs-validation" action="<?php print_link('index/register/?csrf_token=' . Csrf :: $token); ?>" method="post">
                                                                                                <div>
                                                                                                    
                                                                                                    <div class="row">
                                                                                                        
                                                                                                        <div class="form-group col-md-6">
                                                                                                            <label for="email">Email <span class="text-danger">*</span></label>
                                                                                                            <div id="ctrl-email-holder" class=""> 
                                                                                                                <input id="ctrl-email" value="<?php  echo $this->set_field_value('email',''); ?>" type="email" placeholder="Enter Email" required="" name="email" data-url="api/json/akun_email_value_exist/" data-loading-msg="Checking availability ..." data-available-msg="Available" data-unavailable-msg="Not available" class="form-control  ctrl-check-duplicate">
                                                                                                                    <!--
                                                                                                                    <input id="ctrl-email"  value="<?php  echo $this->set_field_value('email',''); ?>" type="email" placeholder="Enter Email"  required="" name="email"  data-url="api/json/akun_email_value_exist/" data-loading-msg="Checking availability ..." data-available-msg="Available" data-unavailable-msg="Not available" class="form-control  ctrl-check-duplicate" />-->
                                                                                                                        
                                                                                                                        <div class="check-status"></div> 
                                                                                                                        
                                                                                                                    </div>
                                                                                                                    
                                                                                                                    
                                                                                                                </div>
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                <div class="form-group col-md-6">
                                                                                                                    <label for="username">Username <span class="text-danger">*</span></label>
                                                                                                                    <div id="ctrl-username-holder" class=""> 
                                                                                                                        <input id="ctrl-username"  value="<?php  echo $this->set_field_value('username',''); ?>" type="text" placeholder="Enter Username"  required="" name="username"  data-url="api/json/akun_username_value_exist/" data-loading-msg="Checking availability ..." data-available-msg="Available" data-unavailable-msg="Not available" class="form-control  ctrl-check-duplicate" />
                                                                                                                            
                                                                                                                            <div class="check-status"></div> 
                                                                                                                            
                                                                                                                        </div>
                                                                                                                        
                                                                                                                        
                                                                                                                    </div>
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                                                                                                    <div class="form-group col-md-6">
                                                                                                                        <label for="password">Password <span class="text-danger">*</span></label>
                                                                                                                        <div id="ctrl-password-holder" class=""> 
                                                                                                                            <input id="ctrl-password"  value="<?php  echo $this->set_field_value('password',''); ?>" type="password" placeholder="Enter Password"  required="" name="password"  class="form-control " />
                                                                                                                                
                                                                                                                                
                                                                                                                                
                                                                                                                            </div>
                                                                                                                            
                                                                                                                            
                                                                                                                        </div>
                                                                                                                        
                                                                                                                        
                                                                                                                        <div class="form-group col-md-6">
                                                                                                                            <label  for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                                                                                                                            <div id="ctrl-confirm_password-holder" class=""> 
                                                                                                                                
                                                                                                                                <input id="-confirm"  class="form-control " type="password" name="confirm_password" required placeholder="Confirm Password" />
                                                                                                                                
                                                                                                                                
                                                                                                                            </div>
                                                                                                                            
                                                                                                                            
                                                                                                                        </div>
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                        <div class="form-group col-md-6">
                                                                                                                            <label for="telp">Telp <span class="text-danger">*</span></label>
                                                                                                                            <div id="ctrl-telp-holder" class=""> 
                                                                                                                                <input id="ctrl-telp"  value="<?php  echo $this->set_field_value('telp',''); ?>" type="number" placeholder="Enter Telp"   name="telp"  class="form-control"/>
                                                                                                                                    
                                                                                                                                    
                                                                                                                                    
                                                                                                                                </div>
                                                                                                                                
                                                                                                                                
                                                                                                                            </div>
                                                                                                                            
                                                                                                                            
                                                                                                                            
                                                                                                                        </div>
                                                                                                                        <div class="form-group form-submit-btn-holder text-center">
                                                                                                                            <button class="btn btn-primary" type="submit">
                                                                                                                                Register now..
                                                                                                                                <i class="fa fa-send"></i>
                                                                                                                            </button>
                                                                                                                        </div>
                                                                                                                    </form>
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                                                                                                    <?php 
                                                                                                                    
                                                                                                                    }  else { 
                                                                                                                    
                                                                                                                    ?>
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                                                                                                    <center>
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                        <script type="application/javascript">
                                                                                                                            const second = 1000,
                                                                                                                            minute = second * 60,
                                                                                                                            hour = minute * 60,
                                                                                                                            day = hour * 24;
                                                                                                                            
                                                                                                                            let countDown = new Date('<?php echo $b;?>').getTime(),
                                                                                                                            x = setInterval(function() {
                                                                                                                            
                                                                                                                            let now = new Date().getTime(),
                                                                                                                            distance = countDown - now;
                                                                                                                            
                                                                                                                            document.getElementById('days').innerText = Math.floor(distance / (day)),
                                                                                                                            document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                                                                                                                            document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                                                                                                                            document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
                                                                                                                            
                                                                                                                            
                                                                                                                            
                                                                                                                            }, second);
                                                                                                                            
                                                                                                                        </script>
                                                                                                                        
                                                                                                                        <div class="container" style="color:white; box-sizing: border-box;
                                                                                                                            margin: 0;
                                                                                                                            padding: 0;">
                                                                                                                            <h4>Coming soon, We will Open Registration on<br><?php echo $b;?>:</h4>
                                                                                                                                <ul>
                                                                                                                                    <li style="display: inline-block;
                                                                                                                                        font-size: 1.5em;
                                                                                                                                        list-style-type: none;
                                                                                                                                        padding: 1em;
                                                                                                                                        text-transform: uppercase;"><span style="
                                                                                                                                            display: block;
                                                                                                                                            font-size: 4.5rem;
                                                                                                                                        " id="days"></span>days</li>
                                                                                                                                        <li style="display: inline-block;
                                                                                                                                            font-size: 1.5em;
                                                                                                                                            list-style-type: none;
                                                                                                                                            padding: 1em;
                                                                                                                                            text-transform: uppercase;"><span style="
                                                                                                                                                display: block;
                                                                                                                                                font-size: 4.5rem;
                                                                                                                                            "  id="hours"></span>Hours</li>
                                                                                                                                            <li style="display: inline-block;
                                                                                                                                                font-size: 1.5em;
                                                                                                                                                list-style-type: none;
                                                                                                                                                padding: 1em;
                                                                                                                                                text-transform: uppercase;"><span style="
                                                                                                                                                    display: block;
                                                                                                                                                    font-size: 4.5rem;
                                                                                                                                                "  id="minutes"></span>Minutes</li>
                                                                                                                                                <li style="display: inline-block;
                                                                                                                                                    font-size: 1.5em;
                                                                                                                                                    list-style-type: none;
                                                                                                                                                    padding: 1em;
                                                                                                                                                    text-transform: uppercase;"><span style="
                                                                                                                                                        display: block;
                                                                                                                                                        font-size: 4.5rem;
                                                                                                                                                    "  id="seconds"></span>Seconds</li>
                                                                                                                                                </ul>
                                                                                                                                            </div>
                                                                                                                                            
                                                                                                                                        </center>
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        <?php   
                                                                                                                                        
                                                                                                                                        }
                                                                                                                                        ?>
                                                                                                                                        
                                                                                                                                        
                                                                                                                                    </p>
                                                                                                                                    
                                                                                                                                    <!-- register selesai -->
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                        <!--    <div class="fadeIn animated mb-4">
                                                                                                                            <div class="text-capitalize">
                                                                                                                                <h2 class="text-capitalize">Welcome To <?php echo SITE_NAME ?></h2>
                                                                                                                                
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        -->
                                                                                                                        
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    
                                                                                                    <div  class="">
                                                                                                        <div class="">
                                                                                                            
                                                                                                            <div class="row ">
                                                                                                                
                                                                                                                <div class="col-md-12 comp-grid">
                                                                                                                    <div class=""><style>
                                                                                                                        .section3-ktm-youth-day{
                                                                                                                        background-color: #f6aa20;
                                                                                                                        padding:40px !important;
                                                                                                                        
                                                                                                                        }
                                                                                                                        
                                                                                                                        .section3-ktm-youth-day-title{
                                                                                                                        color:#d24e9a;
                                                                                                                        text-shadow: 2px 2px #f8ede1;
                                                                                                                        }
                                                                                                                        .section3-ktm-youth-day-content{
                                                                                                                        color:#242d5f;
                                                                                                                        }
                                                                                                                        
                                                                                                                        .section3-ayat-alkitab{
                                                                                                                        background-color: #242d5f;
                                                                                                                        color:white;
                                                                                                                        padding:40px !important;
                                                                                                                        text-align: right;
                                                                                                                        }
                                                                                                                        
                                                                                                                        .section3-hr{
                                                                                                                        width:10%;
                                                                                                                        text-align:right;
                                                                                                                        border-color: white;
                                                                                                                        }
                                                                                                                    </style>
                                                                                                                    <div class="section3"  id="about-section" style="font-size: 1.2em;">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-12 col-md-7 col-lg-7 section3-ktm-youth-day">
                                                                                                                                <h1 class="section3-ktm-youth-day-title">KTM YOUTH DAY</h1>
                                                                                                                                <p class="section3-ktm-youth-day-content">Acara yang diadakan oleh <span class="text-light">Komisi Kepemudaan KTM</span> dalam jangka waktu tertentu untuk mengumpulkan seluruh KTM Muda-Mudi yang tersebar di seluruh dunia dan saling memberikan semangat berkarya di kota masing-masing.</p>
                                                                                                                            </div>
                                                                                                                            <div class="col-sm-12 col-md-5 col-lg-5 wrap section3-ayat-alkitab">
                                                                                                                                <p><i>“Sebab itu kami tidak tawar hati, tetapi meskipun manusia lahiriah kami semakin merosot, namun manusia batiniah kami dibaharui dari sehari ke sehari.”</i></p>
                                                                                                                                <hr align="right" class="section3-hr">
                                                                                                                                    <h4 class="float-right" style="color:#f6aa20;font-family: 'Gotham Book' !important;"><i><b>2 Korintus 4: 16</b></i></h4>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div></div>
                                                                                                                    </div>
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        
                                                                                                        <div  class="">
                                                                                                            <div class="">
                                                                                                                
                                                                                                                <div class="row ">
                                                                                                                    
                                                                                                                    <div class="col-md-12 comp-grid">
                                                                                                                        <div class=""><style>
                                                                                                                            .section4{
                                                                                                                            padding:40px;
                                                                                                                            background-color: #f8ede1;
                                                                                                                            }
                                                                                                                            
                                                                                                                            .section4-title{
                                                                                                                            color:#1a9cd6;
                                                                                                                            font-family: Muro;
                                                                                                                            }
                                                                                                                        </style>
                                                                                                                        <div class="section4">
                                                                                                                            <center>
                                                                                                                                <h1 class="section4-title">THROWBACK</h1>
                                                                                                                                <p>
                                                                                                                                    <img src="assets/images/journey.png" width="100%">
                                                                                                                                    </p>
                                                                                                                                </center>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        
                                                                                                        <div  class="">
                                                                                                            <div class="">
                                                                                                                
                                                                                                                <div class="row ">
                                                                                                                    
                                                                                                                    <div class="col-md-12 ">
                                                                                                                        <div class=""><style>
                                                                                                                            .section5-logo-tengah{
                                                                                                                            padding:40px;
                                                                                                                            background-color: #242d5f;
                                                                                                                            }
                                                                                                                            
                                                                                                                            .section5-color-krem{
                                                                                                                            color:#f8ede1;
                                                                                                                            }
                                                                                                                            
                                                                                                                            .section5-color-orange{
                                                                                                                            color:#f6aa20;
                                                                                                                            }
                                                                                                                            
                                                                                                                            .section5-filosofis{
                                                                                                                            background-color: #1a9cd6;
                                                                                                                            padding:40px !important;
                                                                                                                            }
                                                                                                                            
                                                                                                                            .section5-filosofis-content{
                                                                                                                            color:white;
                                                                                                                            font-family: 'Gotham Book';
                                                                                                                            }
                                                                                                                            
                                                                                                                            .section5-filosofis-buzz{
                                                                                                                            color:white;
                                                                                                                            font-family: 'Gotham';
                                                                                                                            font-weight: 900;
                                                                                                                            }
                                                                                                                        </style>
                                                                                                                        <div class="section5">
                                                                                                                            <div class="row" style="background-color: #242d5f;">
                                                                                                                                <div class="col-sm-12 col-md-5 col-lg-5 section5-logo-tengah align-self-center">
                                                                                                                                    <center><img src="assets/images/logo tengah.png" width="70%"></center>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-sm-12 col-md-7 col-lg-7 section5-filosofis">
                                                                                                                                        <h2><i><b><span class="section5-color-orange">FILOSOFIS TEMA</span><span class="section5-color-krem"> - COME OUT!</span></b></i></h2>
                                                                                                                                        <p class="section5-filosofis-content">OUT merupakan singkatan dari “Our United Transformation”.
                                                                                                                                        Tema ini diambil dari situasi KTM Muda-Mudi yang seringnya nyaman berada di “zona”nya sendiri. Membuat menjadi lupa akan tujuan besar KTM yaitu untuk membawa orang lain pada pengalaman yang sama. Oleh karena itu OUT disini berarti mengajak untuk “keluar dari biasanya” dan membawa pembaharuan terutama untuk diri sendiri sehingga dapat membawa kasih Kristus dimanapun berada serta memiliki semangat muda yang bergerak dengan fondasi iman yang kuat.</p>
                                                                                                                                        <h4 class="section5-filosofis-buzz"><i>BUZZ, COME OUT!</i></h4>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div></div>
                                                                                                                        </div>
                                                                                                                        
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            
                                                                                                            <div  class="">
                                                                                                                <div class="">
                                                                                                                    
                                                                                                                    <div class="row ">
                                                                                                                        
                                                                                                                        <div class="col-md-12 comp-grid">
                                                                                                                            <div class=""><style>
                                                                                                                                .section6{
                                                                                                                                background-color: #d34d9b;
                                                                                                                                padding:20px 0px 0px 0px;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-wrapper{
                                                                                                                                overflow-x: scroll;
                                                                                                                                scrollbar-width: none;
                                                                                                                                -ms-overflow-style: none;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-wrapper::-webkit-scrollbar {
                                                                                                                                display: none;
                                                                                                                                }
                                                                                                                                
                                                                                                                                
                                                                                                                                .section6 table{
                                                                                                                                margin-left: 0px;
                                                                                                                                margin-right: 0px;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6 .row{
                                                                                                                                max-width: 918px;
                                                                                                                                display: inline-block;
                                                                                                                                clear: both;
                                                                                                                                overflow: hidden !important;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6 .xtitle{
                                                                                                                                font-family: 'Muro';
                                                                                                                                color:#f8ede1;
                                                                                                                                font-size: 2.5em;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-item{
                                                                                                                                text-align: center;
                                                                                                                                border-radius: 15px 15px 0px 0px;
                                                                                                                                cursor: pointer;
                                                                                                                                padding:40px;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .active{
                                                                                                                                background-color: #f6aa20;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-item .title{
                                                                                                                                font-family: 'Gotham';
                                                                                                                                color:white;
                                                                                                                                font-size: 1.3em;
                                                                                                                                font-weight: bold;
                                                                                                                                }
                                                                                                                                .section6-item .child-title{
                                                                                                                                font-family: 'Gotham book';
                                                                                                                                color:white;
                                                                                                                                font-size: 1.3em;
                                                                                                                                font-weight: normal;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-item img{
                                                                                                                                width: 100px;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-content{
                                                                                                                                background-color: #f6aa20;
                                                                                                                                margin-left: 0px;
                                                                                                                                margin-right: 0px;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-content .content{
                                                                                                                                padding:40px;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-content .content .title{
                                                                                                                                color:#f8ede1;
                                                                                                                                font-size: 1.2em;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-content .content .description{
                                                                                                                                color:#242d5f;
                                                                                                                                font-size: 1em;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .kelas{
                                                                                                                                width:100%;
                                                                                                                                }
                                                                                                                                
                                                                                                                                
                                                                                                                                @media (min-width: 1306px) {  
                                                                                                                                .section6 table{
                                                                                                                                margin-left: 20px;
                                                                                                                                margin-right: 20px;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-content{
                                                                                                                                background-color: #f6aa20;
                                                                                                                                margin-left: 20px;
                                                                                                                                margin-right: 20px;
                                                                                                                                }
                                                                                                                                .section6-content .content .title{
                                                                                                                                color:#f8ede1;
                                                                                                                                font-size: 1.6em;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-content .content .description{
                                                                                                                                color:#242d5f;
                                                                                                                                font-size: 1.5em;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-item .title{
                                                                                                                                font-family: 'Gotham';
                                                                                                                                color:white;
                                                                                                                                font-size: 1.3em;
                                                                                                                                font-weight: bold;
                                                                                                                                }
                                                                                                                                .section6-item .child-title{
                                                                                                                                font-family: 'Gotham book';
                                                                                                                                color:white;
                                                                                                                                font-size: 1.3em;
                                                                                                                                font-weight: normal;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6 .xtitle{
                                                                                                                                font-family: 'Muro';
                                                                                                                                color:#f8ede1;
                                                                                                                                font-size: 3em;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .kelas{
                                                                                                                                width:70%;
                                                                                                                                }
                                                                                                                                }
                                                                                                                                
                                                                                                                                @media (max-width: 767px) {  
                                                                                                                                .section6-item img{
                                                                                                                                width: 70px;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-item{
                                                                                                                                text-align: center;
                                                                                                                                border-radius: 15px 15px 0px 0px;
                                                                                                                                cursor: pointer;
                                                                                                                                padding:10px;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6-item .title{
                                                                                                                                font-family: 'Gotham';
                                                                                                                                color:white;
                                                                                                                                font-size: 1em;
                                                                                                                                font-weight: bold;
                                                                                                                                }
                                                                                                                                .section6-item .child-title{
                                                                                                                                font-family: 'Gotham book';
                                                                                                                                color:white;
                                                                                                                                font-size: 1em;
                                                                                                                                font-weight: normal;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .section6 .xtitle{
                                                                                                                                font-family: 'Muro';
                                                                                                                                color:#f8ede1;
                                                                                                                                font-size: 2em;
                                                                                                                                }
                                                                                                                                
                                                                                                                                .kelas{
                                                                                                                                width:100%;
                                                                                                                                }
                                                                                                                                }
                                                                                                                            </style>
                                                                                                                            
                                                                                                                            
                                                                                                                            <!-- <div class="section6" id="session-section">
                                                                                                                                
                                                                                                                                <center><h1 class="xtitle">LET'S LEARN ABOUT...</h1></center>
                                                                                                                                <div class="section6-wrapper">
                                                                                                                                    <table cellpadding="0px" cellspacing="0px" border="0px">
                                                                                                                                        <tr>
                                                                                                                                            <td valign="top" class="section6-item active" id="chooser1" onclick="setChoose(1)">
                                                                                                                                                <img src="assets/images/sesi1icon.png">
                                                                                                                                                    <br><br>
                                                                                                                                                        <span class="title">COME OUT</span>
                                                                                                                                                    </td>
                                                                                                                                                    <td valign="top" class="section6-item" id="chooser2" onclick="setChoose(2)">
                                                                                                                                                        <img src="assets/images/sesi2icon.png">
                                                                                                                                                            <br><br>
                                                                                                                                                                <span class="title">C2C</span><br><span class="child-title">Collaboration to Connect</span>
                                                                                                                                                                </td>
                                                                                                                                                                <td valign="top" class="section6-item" id="chooser3" onclick="setChoose(3)">
                                                                                                                                                                    <img src="assets/images/sesi3icon.png">
                                                                                                                                                                        <br><br>
                                                                                                                                                                            <span class="title">SOS!</span><br><span class="child-title">Social for Survive</span>
                                                                                                                                                                            </td>
                                                                                                                                                                            <td valign="top" class="section6-item" id="chooser4" onclick="setChoose(4)">
                                                                                                                                                                                <img src="assets/images/sesi4icon.png">
                                                                                                                                                                                    <br><br>
                                                                                                                                                                                        <span class="title">What Can I Do for God?</span>
                                                                                                                                                                                    </td>
                                                                                                                                                                                    <td valign="top" class="section6-item" id="chooser5" onclick="setChoose(5)">
                                                                                                                                                                                        <img src="assets/images/sesi5icon.png">
                                                                                                                                                                                            <br><br>
                                                                                                                                                                                                <span class="title">How Carmelite Relevant?</span>
                                                                                                                                                                                            </td>
                                                                                                                                                                                            <td valign="top" class="section6-item" id="chooser6" onclick="setChoose(6)">
                                                                                                                                                                                                <img src="assets/images/sesi6icon.png">
                                                                                                                                                                                                    <br><br>
                                                                                                                                                                                                        <span class="title">Mission I’mpossible</span>
                                                                                                                                                                                                    </td>
                                                                                                                                                                                                    <td valign="top" class="section6-item" id="chooser7" onclick="setChoose(7)">
                                                                                                                                                                                                        <img src="assets/images/sesi7icon.png">
                                                                                                                                                                                                            <br><br>
                                                                                                                                                                                                                <span class="title">BTC</span><br><span class="child-title">Be The Change</span>
                                                                                                                                                                                                                </td>
                                                                                                                                                                                                            </tr>
                                                                                                                                                                                                        </table>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div> -->
                                                                                                                                                                                                
                                                                                                                                                                                                <!-- <div class="section6-content">
                                                                                                                                                                                                    <div class="content" id="content1">
                                                                                                                                                                                                        <h2 class="title">COME OUT</h2>
                                                                                                                                                                                                        <p class="description">
                                                                                                                                                                                                            Di sesi ini, kita bersama-sama akan melihat keadaan KTM Muda-Mudi dan mengajak untuk bergerak (keluar dari zona nyaman) serta menumbuhkan rasa memiliki pada komunitas sebagai tempat untuk bertumbuh. Di mana pun berada, berkarya dan melayani, KTM mampu menjadi wadah untuk terus mengobarkan api Roh Kudus.
                                                                                                                                                                                                        </p>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="content" id="content2" style="display: none;">
                                                                                                                                                                                                        <h2 class="title">C2C - Collaboration to Connect</h2>
                                                                                                                                                                                                        <p class="description">
                                                                                                                                                                                                            Memasuki era dimana zamannya kolaborasi akan memberi dampak yang lebih besar. Bahwa bersama-sama kita mampu untuk melakukan karya yang lebih besar dan lebih banyak lagi. Melalui sesi ini kita akan belajar bentuk-bentuk pelayanan bersama dengan berbagai bentuk koneksi.
                                                                                                                                                                                                        </p>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="content" id="content3" style="display: none;">
                                                                                                                                                                                                        <h2 class="title">SOS! - Social for Survive</h2>
                                                                                                                                                                                                        <p class="description">
                                                                                                                                                                                                            Pernah ga merasa selalu miskom (miss komunikasi)? atau kadang ga nyaman ditapi ga berani bilang sama pelayan sel? atau sekarang jadi lebih milih kode-kodean di IG story dan status WA daripada ngomong langsung? Yuk, kita belajar bagaimana sih tipe komunikasi yang bisa kita lakukan di masa sekarang ini.
                                                                                                                                                                                                        </p>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="content" id="content4" style="display: none;">
                                                                                                                                                                                                        <h2 class="title">What Can I Do for God?</h2>
                                                                                                                                                                                                        <div class="description">
                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                                                                                                                                                                                    Setiap kita pasti diberi talenta, tapi apa yah yang bisa kita lakukan melalui komunitas? Sesi ini akan dibagi menjadi kelas-kelas paralel dengan 5 pilihan kelas. Dipilih... dipilih…<br><br>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="col-sm-12 col-md-5 col-lg-5" style="text-align: center;">
                                                                                                                                                                                                                        <img src="assets/images/kelas1.png" class="kelas"><br><br>
                                                                                                                                                                                                                            <img src="assets/images/kelas2.png" class="kelas"><br><br>
                                                                                                                                                                                                                                <img src="assets/images/kelas3.png" class="kelas"><br><br>
                                                                                                                                                                                                                                    <img src="assets/images/kelas4.png" class="kelas"><br><br>
                                                                                                                                                                                                                                        <img src="assets/images/kelas5.png" class="kelas">
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <div class="content" id="content5" style="display: none;">
                                                                                                                                                                                                                                <h2 class="title">How Carmelite Relevant?</h2>
                                                                                                                                                                                                                                <p class="description">
                                                                                                                                                                                                                                    Karmelit? Kayak pernah dengar... tapi kelihatannya sulit dimengerti. Emang iya ajaran karmelit sesulit itu di zaman sekarang? Yuk, kita belajar bersama bagaimana ajaran santo-santa karmelit bisa kita praktekkan dalam hidup sehari- hari.
                                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <div class="content" id="content6" style="display: none;">
                                                                                                                                                                                                                                <h2 class="title">Mission I’mpossible</h2>
                                                                                                                                                                                                                                <p class="description">
                                                                                                                                                                                                                                    Ada yang jadi Volunteer KTM dari kotamu? Atau kamu penasaran para Volunteer KTM ngapain aja? Di sesi ini kita akan mengetahui bersama bagaimana kisah mereka dan apa saja karya pelayanan serta buah dari pemberian diri mereka menjadi Volunteer KTM.
                                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <div class="content" id="content7" style="display: none;">
                                                                                                                                                                                                                                <h2 class="title">BTC - Be The Change</h2>
                                                                                                                                                                                                                                <p class="description">
                                                                                                                                                                                                                                    Kalau kata Ir. Soekarno, “Beri aku 1.000 orang tua, niscaya akan kucabut semeru dari akarnya. Beri aku 10 pemuda, niscaya akan kuguncangkan dunia.”<br>Percaya gak kalau kita semua mampu membawa perubahan sekecil apapun itu? Let’s find out!
                                                                                                                                                                                                                                    </p>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            </div> --></div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            
                                                                                                                                                                                                            <div  class="">
                                                                                                                                                                                                                <div class="">
                                                                                                                                                                                                                    
                                                                                                                                                                                                                    <div class="row ">
                                                                                                                                                                                                                        
                                                                                                                                                                                                                        <div class="col-md-12 comp-grid">
                                                                                                                                                                                                                            <div class=""><!-- section 7 -->
                                                                                                                                                                                                                                <style>
                                                                                                                                                                                                                                    .imggrid{
                                                                                                                                                                                                                                    /*filter: grayscale(100%);*/
                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                </style>
                                                                                                                                                                                                                                <!--
                                                                                                                                                                                                                                <div class="row" align="center">
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                    <div class="col-md-2">
                                                                                                                                                                                                                                        <img class='imggrid grid1' src="assets/images/grid1big.png" width="115%" align="center" >
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                        <div class="col-md-2">
                                                                                                                                                                                                                                            <img class='imggrid grid2' src="assets/images/grid2big.png" width="115%" align="center">
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                            <div class="col-md-2">
                                                                                                                                                                                                                                                <img class='imggrid grid3' src="assets/images/grid3big.png" width="115%" align="center">
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                <div class="col-md-2">
                                                                                                                                                                                                                                                    <img class='imggrid grid4' src="assets/images/grid4big.png" width="115%" align="center">
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                    <div class="col-md-2" align="center">
                                                                                                                                                                                                                                                        <img class='imggrid grid5' src="assets/images/grid5big.png" width="115%" align="center">
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                        <div class="col-md-2" align="center">
                                                                                                                                                                                                                                                            <img class='imggrid grid6' src="assets/images/grid6big.png" width="115%" align="right">
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                        </div> --></div>
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                        <div  class="">
                                                                                                                                                                                                                                            <div class="">
                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                <div class="row ">
                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                    <div class="col-md-12 comp-grid">
                                                                                                                                                                                                                                                        <div class=""><style>
                                                                                                                                                                                                                                                            .section8{
                                                                                                                                                                                                                                                            padding:40px;
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            .section8-ig{
                                                                                                                                                                                                                                                            background-image: url("assets/images/IG.png");
                                                                                                                                                                                                                                                            background-repeat: no-repeat;
                                                                                                                                                                                                                                                            width: 52px;
                                                                                                                                                                                                                                                            height: 56px;
                                                                                                                                                                                                                                                            display:block;
                                                                                                                                                                                                                                                            background-size: 100% 100%;
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            .section8-web{
                                                                                                                                                                                                                                                            background-image: url("assets/images/web.png");
                                                                                                                                                                                                                                                            background-repeat: no-repeat;
                                                                                                                                                                                                                                                            width: 52px;
                                                                                                                                                                                                                                                            height: 56px;
                                                                                                                                                                                                                                                            display:block;
                                                                                                                                                                                                                                                            background-size: 100% 100%;
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            .section8-email{
                                                                                                                                                                                                                                                            background-image: url("assets/images/email.png");
                                                                                                                                                                                                                                                            background-repeat: no-repeat;
                                                                                                                                                                                                                                                            width: 52px;
                                                                                                                                                                                                                                                            height: 56px;
                                                                                                                                                                                                                                                            display:block;
                                                                                                                                                                                                                                                            background-size: 100% 100%;
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            .section8-ig:hover{
                                                                                                                                                                                                                                                            background-image: url("assets/images/IG_press.png");
                                                                                                                                                                                                                                                            background-repeat: no-repeat;
                                                                                                                                                                                                                                                            width: 52px;
                                                                                                                                                                                                                                                            height: 56px;
                                                                                                                                                                                                                                                            display:block;
                                                                                                                                                                                                                                                            background-size: 100% 100%;
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            .section8-web:hover{
                                                                                                                                                                                                                                                            background-image: url("assets/images/web_press.png");
                                                                                                                                                                                                                                                            background-repeat: no-repeat;
                                                                                                                                                                                                                                                            width: 52px;
                                                                                                                                                                                                                                                            height: 56px;
                                                                                                                                                                                                                                                            display:block;
                                                                                                                                                                                                                                                            background-size: 100% 100%;
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            .section8-email:hover{
                                                                                                                                                                                                                                                            background-image: url("assets/images/email_press.png");
                                                                                                                                                                                                                                                            background-repeat: no-repeat;
                                                                                                                                                                                                                                                            width: 52px;
                                                                                                                                                                                                                                                            height: 56px;
                                                                                                                                                                                                                                                            display:block;
                                                                                                                                                                                                                                                            background-size: 100% 100%;
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            .section8 .outro{
                                                                                                                                                                                                                                                            width: 100%;
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            @media (min-width: 768px) {    
                                                                                                                                                                                                                                                            .section8 .outro{
                                                                                                                                                                                                                                                            width: 400px;
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            @media (min-width: 1440px) {    
                                                                                                                                                                                                                                                            .section8 .outro{
                                                                                                                                                                                                                                                            width: 500px;
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                        </style>
                                                                                                                                                                                                                                                        <div class="section8">
                                                                                                                                                                                                                                                            <center>
                                                                                                                                                                                                                                                                <img src="assets/images/outro.png" class="outro">
                                                                                                                                                                                                                                                                    <br>
                                                                                                                                                                                                                                                                        <br>
                                                                                                                                                                                                                                                                            <br>
                                                                                                                                                                                                                                                                                <br>
                                                                                                                                                                                                                                                                                    <h4>For more info:</h4>
                                                                                                                                                                                                                                                                                    <div class="row" style="width: 350px;">
                                                                                                                                                                                                                                                                                        <div class="col">
                                                                                                                                                                                                                                                                                            <a href="http://instagram.com/youthdayktm"><span class="section8-ig"></span></a>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <div class="col">
                                                                                                                                                                                                                                                                                            <a href="http://youth.holytrinitycarmel.com"><span class="section8-web"></span></a>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <div class="col">
                                                                                                                                                                                                                                                                                            <a href="https://api.whatsapp.com/send?phone=+6281331078887&text=Hii.. Kania, I'm Participant Youthday.." target="_blank"><span class="section8-email"></span></a>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <div class="col">
                                                                                                                                                                                                                                                                                            <a href="https://api.whatsapp.com/send?phone=+6281255491113&text=Hii.. Laura, I'm Participant Youthday.." target="_blank"><span class="section8-email"></span></a>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                </center>
                                                                                                                                                                                                                                                                            </div></div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                            <div  class="">
                                                                                                                                                                                                                                                                <div class="">
                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                    <div class="row ">
                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                        <div class="col-md-12 comp-grid">
                                                                                                                                                                                                                                                                            <div class=""><style>
                                                                                                                                                                                                                                                                                .section9{
                                                                                                                                                                                                                                                                                background-color: white;
                                                                                                                                                                                                                                                                                box-shadow:0px 0px 10px black;
                                                                                                                                                                                                                                                                                padding:10px;
                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                .section9-copyright{
                                                                                                                                                                                                                                                                                font-size: 140%;
                                                                                                                                                                                                                                                                                font-family: 'Gotham Book' !important;
                                                                                                                                                                                                                                                                                text-align: center;
                                                                                                                                                                                                                                                                                padding:10px;
                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                .section9-hashtag{
                                                                                                                                                                                                                                                                                text-align: center;
                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                .section9-logo{
                                                                                                                                                                                                                                                                                text-align: center;
                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                @media (min-width: 768px) {  
                                                                                                                                                                                                                                                                                .section9-copyright{
                                                                                                                                                                                                                                                                                font-size: 12px;
                                                                                                                                                                                                                                                                                text-align: center;
                                                                                                                                                                                                                                                                                padding:10px;
                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                @media (min-width: 1366px) {  
                                                                                                                                                                                                                                                                                .section9-copyright{
                                                                                                                                                                                                                                                                                font-size: 140%;
                                                                                                                                                                                                                                                                                text-align: center;
                                                                                                                                                                                                                                                                                padding:10px;
                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                            </style>
                                                                                                                                                                                                                                                                            <div class="section9">
                                                                                                                                                                                                                                                                                <div class="container-fluid ">
                                                                                                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                                                                                                        <div class="col-sm-12 col-md-4 col-lg-4 align-self-center section9-logo">
                                                                                                                                                                                                                                                                                            <img src="assets/images/ktmlogo.png" width="100%" style="max-height: 50px;">
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                            <div class="col-sm-12 col-md-4 col-lg-4 section9-copyright">
                                                                                                                                                                                                                                                                                                Copyright &copy; 2023 - KTM Youth Day
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                            <div class="col-sm-12 col-md-4 col-lg-4 align-self-center section9-hashtag">
                                                                                                                                                                                                                                                                                                <img src="assets/images/hashtag.png" width="50%" style="max-height: 50px;">
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </div></div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                    <div  class="">
                                                                                                                                                                                                                                                                        <div class="">
                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                            <div class="row ">
                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                <div class="col-md-12 comp-grid">
                                                                                                                                                                                                                                                                                    <div class=""><?php
                                                                                                                                                                                                                                                                                        //$this->view->page_title =get_lang('transport_pergi_oke');
                                                                                                                                                                                                                                                                                        ?>
                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                        <script type="application/javascript">
                                                                                                                                                                                                                                                                                            //document.body.style.width = "15cm";
                                                                                                                                                                                                                                                                                            //document.body.style.height = "29cm";
                                                                                                                                                                                                                                                                                            document.body.style.paddingTop = "0px";
                                                                                                                                                                                                                                                                                            document.title = "KTM Youthday Registration 2020 - Come Out";
                                                                                                                                                                                                                                                                                            //document.body.style.backgroundColor = "#99ccff";
                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                            //document.body.style.backgroundImage = "url('<?php echo SITE_ADDR;?>assets/images/bgindex.jpg')";
                                                                                                                                                                                                                                                                                        </script>
                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                        <script type="application/javascript">
                                                                                                                                                                                                                                                                                            document.getElementById("topbar").innerHTML = "";
                                                                                                                                                                                                                                                                                            var x = document.getElementById("topbar");
                                                                                                                                                                                                                                                                                            var y = x.getElementsByClassName("img-responsive");
                                                                                                                                                                                                                                                                                            var i;
                                                                                                                                                                                                                                                                                            for (i = 0; i < y.length; i++) {y[i].hidden = true;}
                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                            var z = x.getElementsByClassName("navbar-brand");
                                                                                                                                                                                                                                                                                            i;
                                                                                                                                                                                                                                                                                            for (i = 0; i < z.length; i++) {z[i].hidden = true;z[i].innerHTML = "";}
                                                                                                                                                                                                                                                                                        </script>
                                                                                                                                                                                                                                                                                        <script type="application/javascript">
                                                                                                                                                                                                                                                                                            var list = document.getElementById("topbar");
                                                                                                                                                                                                                                                                                            list.removeChild(list.childNodes[0]);
                                                                                                                                                                                                                                                                                            list.parentNode.removeChild(list);
                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                            var toRemove = document.getElementById('topbar');
                                                                                                                                                                                                                                                                                            toRemove.parentNode.removeChild(toRemove);
                                                                                                                                                                                                                                                                                        </script>
                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                        <?php
                                                                                                                                                                                                                                                                                        //exit();
                                                                                                                                                                                                                                                                                    ?></div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                    