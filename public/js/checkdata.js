function KiemTraLop() {
    let tenLop = document.forms["lop"]["tenlop"].value;
    if (tenLop.trim() == "") {
        document.getElementById("error-class").innerHTML =
            "Vui lòng nhập tên lớp";
        document.forms["lop"]["tenlop"].focus();
        return false;
    }
    return true;
}

function KiemTraGiaoVien() {
    let tenGiaoVien = document.forms["giaovien"]["tengiaovien"].value;
    let ngaySinh = document.forms["giaovien"]["ngaysinh"].value;
    let gioiTinh = document.forms["giaovien"]["gioitinh"].value;
    let diaChi = document.forms["giaovien"]["diachi"].value;
    let email = document.forms["giaovien"]["email"].value;
    let sdt = document.forms["giaovien"]["sdt"].value;
    let mamh = document.forms["giaovien"]["mamh"].value;
    
    if (tenGiaoVien.trim() == "") {
        document.getElementById("error-name").innerHTML = "Vui lòng nhập tên";
        document.forms["giaovien"]["tengiaovien"].focus();
    } else {
        document.getElementById("error-name").innerHTML = "";
    }
    if (ngaySinh == "") {
        console.log("rong", ngaySinh);
        document.getElementById("error-birthday").innerHTML =
            "Vui lòng nhập chọn ngày sinh";
    } else {
        document.getElementById("error-birthday").innerHTML = "";
    }
    if (gioiTinh == "") {
        document.getElementById("error-gender").innerHTML =
            "Vui lòng chọn giới tính";
    } else {
        document.getElementById("error-gender").innerHTML = "";
    }
    if (diaChi.trim() == "") {
        document.getElementById("error-address").innerHTML =
            "Vui lòng nhập địa chỉ";
    } else {
        document.getElementById("error-address").innerHTML = "";
    }
    if (email.trim() == "") {
        console.log("email", email);
        document.getElementById("error-email").innerHTML =
            "Vui lòng nhập email";
    } else {
        document.getElementById("error-email").innerHTML = "";
    }

    if (sdt.trim() == "") {
        document.getElementById("error-sdt").innerHTML =
            "Vui lòng nhập số điện thoại";
    } else {
        document.getElementById("error-sdt").innerHTML = "";
    }

    if(mamh == ""){
      document.getElementById("error-mamh").innerHTML =
      "Vui lòng chọn môn học";
    }else{
      document.getElementById("error-mamh").innerHTML = "";
    }

    if (tenGiaoVien && gioiTinh && ngaySinh && diaChi && email && sdt) {
        return true;
    }
    return false;
}
