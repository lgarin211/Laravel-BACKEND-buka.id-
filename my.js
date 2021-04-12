    document.getElementById("divmodalsort").style.display = "none"
    document.getElementById("judul_div").style.display = "none"
    document.getElementById("sort_url_div").style.display = "none"

    function sa(params) {
        const as = document.getElementById("cps1").querySelectorAll("#this1")[0].href
        document.getElementById("modalsort").src = as
    }

    function foas2(params) {
        document.getElementById("inputsection").classList = "col-md-6"
        document.getElementById("divmodalsort").style.display = "block"
        document.getElementById("judul_div").style.display = "block"
        document.getElementById("sort_url_div").style.display = "block"
    }

    function cps() {
        foas2()
        const url = document.getElementById("basic-url1").value
        document.getElementById("modalsort21").src = url
    }