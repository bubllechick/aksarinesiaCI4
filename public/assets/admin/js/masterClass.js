$(function () {
    const token = window.localStorage.getItem('token')
    if (!token) {
        window.location.replace("http://localhost:8080/admin/login");
    }
    // input master class
    $('#masterClass').submit(function (event) {
        event.preventDefault();
        let unindexed_array = $(this).serializeArray();
        let indexed_array = new Object();
        $.map(unindexed_array, function (n, i) {
            indexed_array[n['name']] = n['value'];
            if (unindexed_array.indexOf(i) !== -1) {
                indexed_array[n['name']] += ',';
            }
        });
        console.log(indexed_array)

        if (indexed_array.id !== '') {
            console.log('update')
            const url = `http://localhost:3000/tipe-soal/${indexed_array.id}`;
            const resultData = _fw_pacth_token(url, indexed_array, token);
            resultData.then(function (result) {
                setTimeout(() => {
                    if (result.status === 200) {
                        masterClassTable.ajax.reload();
                        swal("Tersimpan");
                        $('#modal-default').modal('hide')
                    } else {
                        swal("Gagal Tersimpan");
                        $('#modal-default').on('hidden.bs.modal', function (e) {
                            $('#masterClass').find("input[type=text], text").val("");
                        })
                    }
                }, 2000);
            });
        } else {
            console.log('save')
            const url = 'http://localhost:3000/tipe-soal';
            const resultData = _fw_post_token(url, indexed_array, token);
            resultData.then(function (result) {
                setTimeout(() => {
                    if (result.status === 201) {
                        masterClassTable.ajax.reload();
                        swal("Tersimpan");
                        $('#modal-default').modal('hide')
                    } else {
                        swal("Gagal Tersimpan");
                        $('#modal-default').on('hidden.bs.modal', function (e) {
                            $('#masterClass').find("input[type=text], text").val("");
                        })
                    }
                }, 2000);
            });
        }
    });

    const masterClassTable = $('#masterClassTable').DataTable({
        ajax: {
            url: "http://localhost:3000/tipe-soal",
            headers: { 'Authorization': `Bearer ${token}` },
            type: "GET",
            contentType: 'application/json',
            success: function (data) {
                // console.log(data)
                populateDataTable(data);
            },
            error: function (e) {
                console.log("There was an error with your request...");
                console.log("error: " + JSON.stringify(e));
            }
        }, //ajax
        scrollX: true,
        // scrollY: true,
        columnDefs: [
            { width: '10%', targets: 0 },
            { width: '20%', targets: 1 },
            { width: '30%', targets: 2 },
            { width: '20%', targets: 3 },
            { width: '20%', targets: 6 },
            // {
            //     targets: '_all',
            //     render: function (data, type, row) {
            //         if (type === 'display') {
            //             if (isNaN(data) && moment(data, 'YYYY-MM-DD', true).isValid()) {
            //                 return moment(data).format('MM/DD/YYYY');
            //             }
            //         }
            //         return data;
            //     }
            // },
            { targets: [1], width: '650px', className: 'dt-left', className: 'dt-head-left' },
            { targets: '_all', className: 'dt-center' }
        ]
    }); // table

    function populateDataTable(data) {
        $("#masterClassTable").DataTable().clear();
        let row = 1;
        $.each(data, function (index, value) {
            // console.log(value)
            $('#masterClassTable').dataTable().fnAddData([
                row,
                value.id,
                // value.user.id,
                value.nama_soal,
                value.kode_paket,
                value.create_at,
                value.update_at,
                `<a href='javascript:void(0);' class='btn btn-secondary btn-update btn-sm fa-solid fas fa-edit fa-2x' title='Edit'></a>
                <a href='javascript:void(0);' class='btn btn-danger btn-delete btn-sm fa-solid fas fa-trash-alt fa-2x' title='Hapus'></a>`
            ]);

            row++;
        });
    }
    masterClassTable.column(1).visible(false);
    // masterClassTable.column(2).visible(false);

    $('#masterClassTable tbody').on('click', '.btn-update', function (e) {
        var row = masterClassTable.row($(this).parents('tr')).data();
        console.log(JSON.stringify(row));
        // automaticFill(row)
        $('#modal-default').modal('show')
        $('#id').val(row[1])
        // $('#user').val(row[2])
        $('#nama_soal').val(row[2])
        $('#kode_paket').val(row[3])
    });

    $('#masterClassTable tbody').on('click', '.btn-delete', function (e) {
        swal({
            title: 'Apakah anda yakin ingin menghapus data ini?',
            icon: 'warning',
            buttons: [
                'No, cancel it!',
                'Yes, I am sure!'
            ],
            dangerMode: true,
        }).then((isConfirm) => {
            if (isConfirm) {
                var row = masterClassTable.row($(this).parents('tr')).data();
                console.log(row[1])

                const url = `http://localhost:3000/tipe-soal/${row[1]}`;
                const resultData = _fw_delete_token(url, token);
                resultData.then(function (result) {
                    console.log(result)
                    setTimeout(() => {
                        if (result) {
                            console.log('berhasil');
                            masterClassTable.ajax.reload();
                            swal("Message", "success");
                            $('#modal-default').on('hidden.bs.modal', function (e) {
                                $('#masterClass').find("input[type=text], text").val("");
                            })
                        } else {
                            swal("Message", "Tidak terhapus");
                            $('#modal-default').on('hidden.bs.modal', function (e) {
                                $('#masterClass').find("input[type=text], text").val("");
                            })
                        }
                    }, 2000);
                });
            }
            else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
    });

    $('#modal-default').on('hidden.bs.modal', function (e) {
        $('#masterClass').find("input[type=text], text").val("");
        const randomNumber1 = Math.floor(100000 + Math.random() * 900000);
        $('#kode_paket').val(randomNumber1);
    });
    $('#modal-default-materi').on('hidden.bs.modal', function (e) {
        $('#materiClass').find("input[type=text], text").val("");
        const randomNumber2 = Math.floor(100000 + Math.random() * 900000);
        $('#kode_paket1').val(randomNumber2);
    });
    // input master class
    $('#materiClass').submit(function (event) {
        event.preventDefault();
        let unindexed_array = $(this).serializeArray();
        let indexed_array = new Object();
        $.map(unindexed_array, function (n, i) {
            indexed_array[n['name']] = n['value'];
            if (unindexed_array.indexOf(i) !== -1) {
                indexed_array[n['name']] += ',';
            }
        });
        console.log(indexed_array.idmateri)
        if (indexed_array.idmateri !== '') {
            console.log('ini update', indexed_array)
            const url = `http://localhost:3000/tipe-soal/materi-soal-patch/${indexed_array.idmateri}`;
            const resultData = _fw_pacth_token(url, indexed_array, token);
            resultData.then(function (result) {
                setTimeout(() => {
                    if (result.status === 200) {
                        materiClassTable.ajax.reload();
                        swal("Tersimpan");
                        $('#modal-default-materi').modal('hide')
                    } else {
                        swal("Gagal Tersimpan");
                        $('#modal-default-materi').on('hidden.bs.modal', function (e) {
                            $('#masterClass').find("input[type=text], text").val("");
                        })
                    }
                }, 2000);
            });
        } else {
            const url = 'http://localhost:3000/tipe-soal/materi-soal';
            const resultData = _fw_post_token(url, indexed_array, token);
            resultData.then(function (result) {
                setTimeout(() => {
                    if (result.status === 201) {
                        materiClassTable.ajax.reload();
                        swal("Tersimpan");
                        $('#modal-default-materi').modal('hide')
                    } else {
                        swal("Gagal Tersimpan");
                        $('#modal-default-materi').on('hidden.bs.modal', function (e) {
                            $('#masterClass').find("input[type=text], text").val("");
                        })
                    }
                }, 2000);
            });
        }
    });
    const materiClassTable = $('#materiClassTable').DataTable({
        ajax: {
            url: "http://localhost:3000/tipe-soal/findAll-materi",
            headers: { 'Authorization': `Bearer ${token}` },
            type: "GET",
            contentType: 'application/json',
            success: function (data) {
                console.log(data)
                populateDataTablemateri(data);
            },
            error: function (e) {
                console.log("There was an error with your request...");
                console.log("error: " + JSON.stringify(e));
            }
        }, //ajax
        scrollX: true,
        // scrollY: true,
        columnDefs: [
            { width: '5%', targets: 0 },
            // { width: '20%', targets: 1 },
            { width: '20%', targets: 2 },
            { width: '10%', targets: 3 },
            { width: '20%', targets: 4 },
            { width: '10%', targets: 6 },
            { width: '20%', targets: 7 },
            { width: '20%', targets: 10 },
            {
                targets: '_all',
                createdCell: function (td, cellData, rowData, row, col) {
                    $(td).css('padding', '3px')
                }
            },
            { targets: [1], width: '650px', className: 'dt-left', className: 'dt-head-left' },
            { targets: '_all', className: 'dt-center' }
        ]
    }); // table

    function populateDataTablemateri(data) {
        $("#materiClassTable").DataTable().clear();
        let row = 1;
        $.each(data, function (index, value) {
            // console.log(value)
            $('#materiClassTable').dataTable().fnAddData([
                row,
                value.id,
                value.materi_kelas,
                value.kode_paket,
                value.status,
                value.tipeSoal.id,
                value.tipeSoal.kode_paket,
                value.tipeSoal.nama_soal,
                value.create_at,
                value.update_at,
                `<a href='javascript:void(0);' class='btn btn-secondary btn-option btn-sm fas fa-folder fa-2x' title='Tambah Materi'></a>
                <a href='javascript:void(0);' class='btn btn-secondary btn-update btn-sm fa-solid fas fa-edit fa-2x' title='Edit'></a>
                <a href='javascript:void(0);' class='btn btn-danger btn-delete btn-sm fa-solid fas fa-trash-alt fa-2x' title='Hapus'></a>`
            ]);
            row++;
        });
    }
    materiClassTable.column(1).visible(false);
    materiClassTable.column(5).visible(false);
    $('#materiClassTable tbody').on('click', '.btn-update', function (e) {
        var row = materiClassTable.row($(this).parents('tr')).data();
        console.log(JSON.stringify(row));
        // automaticFill(row)
        $('#modal-default-materi').modal('show')
        $('#idmateri').val(row[1])
        $('#materi_kelas').val(row[2])
        $('#kode_paket1').val(row[3])
        $('#status').val(row[4])
        // $('#select_kode_kelas').val(row[3])
    });

    $('#materiClassTable tbody').on('click', '.btn-option', function (e) {
        var row = materiClassTable.row($(this).parents('tr')).data();
        console.log(JSON.stringify(row));
        console.log(row[1]);
        document.getElementById("materiSoalId").value = row[1]
        $('#modal-tambah-soal').modal('show')
    });


    $('#materiClassTable tbody').on('click', '.btn-delete', function (e) {
        swal({
            title: 'Apakah anda yakin ingin menghapus data ini?',
            icon: 'warning',
            buttons: [
                'No, cancel it!',
                'Yes, I am sure!'
            ],
            dangerMode: true,
        }).then((isConfirm) => {
            if (isConfirm) {
                var row = materiClassTable.row($(this).parents('tr')).data();
                console.log(row[1])

                const url = `http://localhost:3000/tipe-soal/remove-materi/${row[1]}`;
                const resultData = _fw_delete_token(url, token);
                resultData.then(function (result) {
                    console.log(result)
                    setTimeout(() => {
                        if (result) {
                            console.log('berhasil');
                            materiClassTable.ajax.reload();
                            swal("Message", "success");
                            $('#modal-default-materi').on('hidden.bs.modal', function (e) {
                                $('#masterClass').find("input[type=text], text").val("");
                            })
                        } else {
                            swal("Message", "Tidak terhapus");
                            $('#modal-default-materi').on('hidden.bs.modal', function (e) {
                                $('#masterClass').find("input[type=text], text").val("");
                            })
                        }
                    }, 2000);
                });
            }
            else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
    });

    (() => {
        const url = 'http://localhost:3000/tipe-soal';
        const dataResult = _fw_get_token(url, token);
        dataResult.then((result) => {
            setTimeout(() => {
                if (result.status === 200) {
                    console.log(result.data);
                    const dataSelect = result.data;
                    $('#select_kode_kelas').select2({ width: 'element' });
                    var options = $('#select_kode_kelas');
                    $.each(dataSelect, function () {
                        options.append($("<option />").val(this.id).text(this.kode_paket));
                    });
                } else {
                    swal("Wrong Reload Option, materi soal kode");
                }
            }, 2000);
        });
        const randomNumber1 = Math.floor(100000 + Math.random() * 900000);
        const randomNumber2 = Math.floor(100000 + Math.random() * 900000);
        $('#kode_paket').val(randomNumber1);
        $('#kode_paket1').val(randomNumber2);
        console.log(randomNumber1, randomNumber2);
        document.getElementById("myBar").hidden = true;

    })();

    $('#modalTambahSoal').submit(function (event) {
        event.preventDefault();
        let unindexed_array = $(this).serializeArray();
        let indexed_array = new Object();
        $.map(unindexed_array, function (n, i) {
            indexed_array[n['name']] = n['value'];
            if (unindexed_array.indexOf(i) !== -1) {
                indexed_array[n['name']] += ',';
            }
        });
        if (indexed_array.idsoal !== '') {
            console.log(indexed_array);
            // console.log('ini update', indexed_array)
            // const url = `http://localhost:3000/tipe-soal/materi-soal-patch/${indexed_array.idmateri}`;
            // const resultData = _fw_pacth_token(url, indexed_array, token);
            // resultData.then(function (result) {
            //     setTimeout(() => {
            //         if (result.status === 200) {
            //             materiClassTable.ajax.reload();
            //             swal("Tersimpan");
            //             $('#modal-default-materi').modal('hide')
            //         } else {
            //             swal("Gagal Tersimpan");
            //             $('#modal-default-materi').on('hidden.bs.modal', function (e) {
            //                 $('#masterClass').find("input[type=text], text").val("");
            //             })
            //         }
            //     }, 2000);
            // });
        } else {
            console.log(indexed_array);
            const url = 'http://localhost:3000/tipe-soal/soal';
            const resultData = _fw_post_token(url, indexed_array, token);
            resultData.then(function (result) {
                setTimeout(() => {
                    if (result.status === 201) {
                        materiClassTable.ajax.reload();
                        swal("Tersimpan");
                        $('#modal-default-materi').modal('hide')
                    } else {
                        swal("Gagal Tersimpan");
                        $('#modal-default-materi').on('hidden.bs.modal', function (e) {
                            $('#masterClass').find("input[type=text], text").val("");
                        })
                    }
                }, 2000);
            });
        }
    });

    var audioupload = document.getElementById('customFileInput');
    audioupload.onchange = function (e) {
        var sound = document.getElementById('audioPreview');
        sound.src = URL.createObjectURL(this.files[0]);
        sound.onend = function (e) {
            URL.revokeObjectURL(this.src);
        }
        var file = this.files[0];
        var filename = file.name;
        console.log(filename);
        if (file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = (readerEvt) => {
                var binarystring = readerEvt.target.result;
                if (binarystring) {
                    // document.getElementById(id).style.display = 'block';
                    // hide the lorem ipsum text
                    document.getElementById("myBar").hidden = false;
                    var elem = document.getElementById("myBar");
                    var width = 1;
                    var id = setInterval(frame, 10);
                    function frame() {
                        if (width >= 100) {
                            clearInterval(id);
                            i = 0;
                            console.log(binarystring);
                            document.getElementById("file").value = binarystring;
                            swal("File siap");
                            document.getElementById("myBar").hidden = true;
                        } else {
                            width++;
                            // document.getElementById("text").disabled = true;
                            // document.getElementById("section").disabled = true;
                            elem.style.width = width + "%";
                        }
                    }
                }
            }
            // reader.readAsDataURL(file);
        }
        // document.getElementById('audioUploadName').value = filename
    }

    document.querySelector('.custom-file-input').addEventListener('change', function (e) {
        var name = document.getElementById("customFileInput").files[0].name;
        var nextSibling = e.target.nextElementSibling
        nextSibling.innerText = name
    })

    const fileHeader = (file) => {
        let fileHeader = new Map()
        fileHeader.set("/9j", "data:image/jpeg;base64,")
        fileHeader.set("iVB", "data:image/png;base64,")
        // fileHeader.set("Qk0", "bmp")
        // fileHeader.set("SUk", "tiff")
        // fileHeader.set("JVB", "pdf")
        // fileHeader.set("UEs", "ofd")
        let res = ""
        fileHeader.forEach((v, k) => {
            if (k == file.substr(0, 3)) { res = v }
        })
        if (res == "") { res = "unknown file" } return res;
    }

});