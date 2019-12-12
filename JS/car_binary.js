


document.getElementById('customCheck').onchange = function () {
    document.getElementById('np').disabled = !this.checked;
        document.getElementById('nr').disabled = !this.checked;
            document.getElementById('ns').disabled = !this.checked;

};