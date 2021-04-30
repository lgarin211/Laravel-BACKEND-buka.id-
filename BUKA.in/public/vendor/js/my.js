            document.getElementById("divmodalsort").style.display = "none"
            document.getElementById("judul_div").style.display = "none"
            document.getElementById("sort_url_div").style.display = "none"

    const sac = screen.width
    const cas = screen.height
    if (cas <= 800) {
        // document.getElementById("casing").classList = ""
    }

    // nanti hapus
    // console.log(document.getElementById("m0"))
    // document.getElementById("m1").style.display="none"
    function sa(params) {
        const as = document.getElementById("cpss1").querySelectorAll("#this1")[0].href
        document.getElementById("modalsort22").src = as
    }

    function foas2(params) {
        document.getElementById("inputsection").classList = "col-md-6"
        document.getElementById("divmodalsort").style.display = "block"
        document.getElementById("judul_div").style.display = "block"
        document.getElementById("sort_url_div").style.display = "block"
    }

    function cps() {
        // alert(cas)
        if (sac<500) {
            document.getElementsByClassName("spsldiv2")[0].style.height="120vh"
        }else{
            document.getElementsByClassName("spsldiv2")[0].style.height="70vh"
        }
        // document.getElementsByClassName("spsldiv2")[0].style.height="100vh"
        foas2()
        const url = document.getElementById("basic-url1").value
        document.getElementById("modalsort21").src = url
    }
    function lepas() {
        document.getElementById('pancar').innerHTML=""
        document.getElementById("casing").classList = "col-md-12 col-sm-12 doc"
    }

    function moving(id) {
        document.getElementById("casing").classList = "col-md-3 col-sm-12 doc"
        document.getElementById("pancar").innerHTML = ""
        document.getElementById("m" + id).style.display = "block"
        document.getElementById("pancar").innerHTML = document.getElementById("m" + id).innerHTML
        document.getElementById("m" + id).style.display = "none"
    }

    function cps2() {
        const url = document.getElementById("basic-url2").value
        document.getElementById("modalsort22").src = url
    }
