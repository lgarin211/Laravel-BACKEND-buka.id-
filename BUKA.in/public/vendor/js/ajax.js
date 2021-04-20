function cekmysort() {
    const cekLink = document.getElementById("sort_url").value
    fetch("/user/sortLink?cekmysort=991&call=" + cekLink, {
            method: 'GET',
        }).then((response) => response.text())
        .then((data) => {
            if (data == "link bisa kamu gunakan") {
                document.getElementById('know').classList = 'text-center col-md-12 alert-warning'
                document.getElementById('know').innerHTML = data
                document.getElementById('sub').style.display="block"

            } else {
                document.getElementById('know').innerHTML = data
                document.getElementById('know').classList = 'text-center col-md-12 alert-danger '
                document.getElementById('sub').style.display="none"

            }
        });
}

getsortlist()
function getsortlist() {
    const cekLink = document.getElementById("sort_url").value
    fetch("/user/sortLink?cekmysort=992", {
            method: 'GET',
        }).then((response) => response.text())
        .then((data) => {
            document.getElementById('include_list').innerHTML = data


        });
}
