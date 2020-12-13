function classList1() {
    let divs = document.getElementsByClassName("col-md-1");
    for (let div of divs) {
        div.addEventListener("click", event => {
            let colorfulSquareClass = div.classList.item(1);
            if (colorfulSquareClass != null) {
                console.log("you picked " + colorfulSquareClass + " div");
            }
        });
    }
}

function find() {
    let elements = $('hr').next().html();
    let containerAr = [];
    let varContainer = "";
    let finalString = "";
    for (let runner = 0; runner < elements.length; ++runner) {

        if (!isNaN(parseInt(elements.charAt(runner)))) {
            // console.log(elements.charAt(runner));
            varContainer += elements.charAt(runner);
        } else {
            containerAr.push(varContainer);
            varContainer = "";
        }
    }
    containerAr.forEach(stringNumber => {
        let char = String.fromCharCode(parseInt(stringNumber));
        finalString += char;
    });
    let br = document.createElement('br');
    let hr = document.createElement('hr');
    document.body.append(br);
    document.body.append(hr);
    document.body.append(finalString);
    let finalNumbers = [];
    for (let runner = 0; runner < finalString.length; runner++) {
        finalNumbers.push(finalString.charCodeAt(runner));
    }
    console.log(finalNumbers);
    document.body.append(br);
    document.body.append(finalNumbers);
}

