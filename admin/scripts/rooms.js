let add_room_form = document.getElementById('add_room_form');

add_room_form.addEventListener('submit', function (e) {
    e.preventDefault();
    add_room();
});

function add_room() {
    let data = new FormData();

    data.append('add_room', '');
    data.append('name', add_room_form.elements['name'].value);
    data.append('area', add_room_form.elements['area'].value);
    data.append('price', add_room_form.elements['price'].value);
    data.append('quantity', add_room_form.elements['quantity'].value);
    data.append('adult', add_room_form.elements['adult'].value);
    data.append('children', add_room_form.elements['children'].value);
    data.append('desc', add_room_form.elements['desc'].value);

    let features = [];
    let feature_checkboxes = add_room_form.querySelectorAll('input[name="features"]:checked');
    for (let i = 0; i < feature_checkboxes.length; i++) {
        features.push(feature_checkboxes[i].value);
    }

    let facilities = [];
    let facility_checkboxes = add_room_form.querySelectorAll('input[name="facilities"]:checked');
    for (let i = 0; i < facility_checkboxes.length; i++) {
        facilities.push(facility_checkboxes[i].value);
    }
    data.append('features', JSON.stringify(features));
    data.append('facilities', JSON.stringify(facilities));

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);

    xhr.onload = function () {
        console.log("Server response:", this.responseText);
        var myModal = document.getElementById('add-room');
        var modal = bootstrap.Modal.getInstance(myModal);

        if (this.responseText == 1) {
            alert('success', 'Phòng đã được thêm thành công!');
            add_room_form.reset();
            get_all_rooms();
        }
        else {
            alert('error', 'Thêm phòng thất bại!');
        }
    }

    xhr.send(data);
}

function get_all_rooms() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('room-data').innerHTML = this.responseText;
    }

    xhr.send('get_all_rooms');
}

let edit_room_form = document.getElementById('edit_room_form');

function edit_details(id) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        let data = JSON.parse(this.responseText);
        edit_room_form.elements['name'].value = data.roomdata.name;
        edit_room_form.elements['area'].value = data.roomdata.area;
        edit_room_form.elements['price'].value = data.roomdata.price;
        edit_room_form.elements['quantity'].value = data.roomdata.quantity;
        edit_room_form.elements['adult'].value = data.roomdata.adult;
        edit_room_form.elements['children'].value = data.roomdata.children;
        edit_room_form.elements['desc'].value = data.roomdata.description;
        edit_room_form.elements['room_id'].value = data.roomdata.id;

        // Features
        let feature_checkboxes = edit_room_form.querySelectorAll('input[name="features"]');
        for (let i = 0; i < feature_checkboxes.length; i++) {
            if (data.features.includes(parseInt(feature_checkboxes[i].value))) {
                feature_checkboxes[i].checked = true;
            }
        }

        // Facilities
        let facility_checkboxes = edit_room_form.querySelectorAll('input[name="facilities"]');
        for (let i = 0; i < facility_checkboxes.length; i++) {
            if (data.facilities.includes(parseInt(facility_checkboxes[i].value))) {
                facility_checkboxes[i].checked = true;
            }
        }
    }

    xhr.send('get_room=' + id);
}

edit_room_form.addEventListener('submit', function (e) {
    e.preventDefault();
    submit_edit_room();
});

function submit_edit_room() {
    let data = new FormData();

    data.append('edit_room', '');
    data.append('room_id', edit_room_form.elements['room_id'].value);
    data.append('name', edit_room_form.elements['name'].value);
    data.append('area', edit_room_form.elements['area'].value);
    data.append('price', edit_room_form.elements['price'].value);
    data.append('quantity', edit_room_form.elements['quantity'].value);
    data.append('adult', edit_room_form.elements['adult'].value);
    data.append('children', edit_room_form.elements['children'].value);
    data.append('desc', edit_room_form.elements['desc'].value);

    let features = [];
    let feature_checkboxes = edit_room_form.querySelectorAll('input[name="features"]:checked');
    for (let i = 0; i < feature_checkboxes.length; i++) {
        features.push(feature_checkboxes[i].value);
    }

    let facilities = [];
    let facility_checkboxes = edit_room_form.querySelectorAll('input[name="facilities"]:checked');
    for (let i = 0; i < facility_checkboxes.length; i++) {
        facilities.push(facility_checkboxes[i].value);
    }
    data.append('features', JSON.stringify(features));
    data.append('facilities', JSON.stringify(facilities));

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);

    xhr.onload = function () {
        console.log("Server response:", this.responseText);
        var myModal = document.getElementById('edit-room');
        var modal = bootstrap.Modal.getInstance(myModal);

        if (this.responseText == 1) {
            alert('success', 'Phòng đã được cập nhật thành công!');
            edit_room_form.reset();
            get_all_rooms();
        }
        else {
            alert('error', 'Thêm phòng thất bại!');
        }
    }

    xhr.send(data);
}

function toggle_status(id, val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (this.responseText == 1) {
            alert('success', 'Cập nhật trạng thái thành công!');
            get_all_rooms();
        }
        else {
            alert('error', 'Cập nhật trạng thái thất bại!');
        }
    }

    xhr.send('toggle_status=' + id + '&value=' + val);
}

let add_image_form = document.getElementById('add_image_form');
add_image_form.addEventListener('submit', function (e) {
    e.preventDefault();
    add_image();
});

function add_image() {
    let data = new FormData();
    data.append('image', add_image_form.elements['image'].files[0]);
    data.append('room_id', add_image_form.elements['room_id'].value);
    data.append('add_image', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);

    xhr.onload = function () {
        if (this.responseText == 'inv_img') {
            alert("error", "Chỉ chấp nhận file ảnh", 'image-alert');
        }
        else if (this.responseText == 'inv_size') {
            alert("error", "Kích thước ảnh quá lớn", 'image-alert');
        }
        else if (this.responseText == 'upd_failed') {
            alert("error", "Thêm ảnh thất bại", 'image-alert');
        }
        else {
            alert("success", "Thêm ảnh mới thành công", 'image-alert');
            room_images(add_image_form.elements['room_id'].value, document.querySelector('#room-images .modal-title').innerText);
            add_image_form.reset();
        }

    }

    xhr.send(data);
}

function room_images(id, name) {
    document.querySelector('#room-images .modal-title').innerText = name;
    add_image_form.elements['room_id'].value = id;
    add_image_form.elements['image'].value = '';

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('room-image-data').innerHTML = this.responseText;
    }

    xhr.send('get_room_images=' + id);
}

function rem_image(image_id, room_id) {
    let data = new FormData();
    data.append('image_id', image_id);
    data.append('room_id', room_id);
    data.append('rem_image', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);

    xhr.onload = function () {
        if (this.responseText == 1) {
            alert("success", "Thêm ảnh mới thành công", 'image-alert');
            room_images(room_id, document.querySelector('#room-images .modal-title').innerText);
        }
        else {
            alert("error", "Xóa ảnh thất bại", 'image-alert');
        }
    }

    xhr.send(data);
}

function thumb_image(image_id, room_id) {
    let data = new FormData();
    data.append('image_id', image_id);
    data.append('room_id', room_id);
    data.append('thumb_image', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);

    xhr.onload = function () {
        console.log("Response:", this.responseText);
        if (this.responseText == 1) {
            alert("success", "Ảnh thu nhỏ đã được sửa thành công", 'image-alert');
            room_images(room_id, document.querySelector('#room-images .modal-title').innerText);
        }
        else {
            console.log("Error response:", response);
            alert("error", "Chỉnh sửa ảnh thu nhỏ thất bại", 'image-alert');
        }
    }

    xhr.send(data);
}

function remove_room(room_id) {
    if (confirm("Bạn có chắc muốn xóa phòng này không?")) {
        let data = new FormData();
        data.append('room_id', room_id);
        data.append('remove_room', '');
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/rooms.php", true);

        xhr.onload = function () {
            console.log("Response:", this.responseText);
            if (this.responseText == 1) {
                alert("success", "Phòng đã được xóa");
                get_all_rooms();
            }
            else {
                console.log("Error response:", response);
                alert("error", "Xóa phòng thất bại", 'image-alert');
            }
        }

        xhr.send(data);
    }
}

window.onload = function () {
    get_all_rooms();
}