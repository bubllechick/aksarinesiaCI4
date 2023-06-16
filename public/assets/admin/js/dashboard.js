$(function () {
    const token = window.localStorage.getItem('token')
    if(!token) {
        window.location.replace("http://localhost:8080/admin/login");
    }
})