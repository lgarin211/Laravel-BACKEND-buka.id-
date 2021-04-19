function cekmysort() {
    const cekLink = document.getElementById("sort_url").value
    fetch("/user/sortLink?cekmysort=21020&call=" + cekLink, {
            method: 'GET',
        }).then((response) => response.text())
        .then((data) => {
            if (data == "link bisa kamu gunakan") {
                document.getElementById('know').classList = 'text-center col-md-12 alert-warning '
                document.getElementById('know').innerHTML = data
            } else {
                document.getElementById('know').innerHTML = data
                document.getElementById('know').classList = 'text-center col-md-12 alert-danger '
            }
        });
}
