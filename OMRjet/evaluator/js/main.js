// // function openCvReady(){
// //     cv["onRuntimeInitialized"]=()=>{
// //         console.log("openCV Ready")
// //         let imgMain=cv.imread("img-main");
// //         cv.imshow("main-canvas",imgMain);
// //         imgMain.delete();
// //     };
// }
function openCvReady() {
    cv.onRuntimeInitialized = () => {
        console.log("OpenCV Ready");

        // Get the canvas element by its ID
        let canvasElement = document.getElementById("main-canvas");
        const ctx = canvasElement.getContext("2d");
        if (!ctx) {
            console.error("2D rendering context not available.");
            return;
        }
        
        // Read the image from the canvas element
        let imgMain = cv.imread(canvasElement);

        // Display the image on the canvas
        cv.imshow(canvasElement, imgMain);

        // Don't forget to release the image data when you're done with it
        imgMain.delete();
    };
}

