<!DOCTYPE html>
<html>
    <head>
        <title>Profil Saya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="asset/css/styleVALUEJS.css">
    </head>
      <!-- 1Untuk mengisi perubahan pada form, maka akan bisa diterapkan pada form. 
           Mengubah Button Contact menjadi Button Edit
           hal 1 : memberikan identitas pada setiap Komponen pada script HTML Kita
           jadi setiap komponen kita berikan nama/id supaya lebih mudah untuk mengubah nanti. 
       -->
    <body>
        <nav>
            <div class="menu-mobile">
                 <!-- 2tambahkan -->
                <a href="#" onclick="showMenu()">menu</a>
            </div>
            <ul id="menu">
                <li><a href="/">HOME</a></li>
                <li><a href="#">PRODUCT</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">INVENTORY</a></li>
            </ul>
        </nav>

        <section id="box-profile">
            <div class="img-profile">
                <div class="photo" style="background-image: url(file:///Users/swijaya/Downloads/WFDB2/portfoliotm6/asset/image/download.jpeg)">
                </div>
            </div>
            <div class="description">
                <!-- 2Pada bagian Nama tambahkan atribut ID. penting mudah diingat dan dipahami!! 
                kemudian pada roles kasih nama prole, lalu 
                pada button contact ubah nama menjadi EDIT lalu value pada ahref tambahkan inputform, 
                save - debug 
                pada saat klik edit akan mengarah ke form input.

                next

                kita kasih atribut onclick=editForm pada button edit 

                -->
                <h1 id="pName">Nama Anda</h1>
                <p id="pRole">Front End Designer</p>
                <a href="#input-form" class="button bg-blue" onclick="editForm()">Edit</a>
                <a href="#" class="button border-green">Resume</a>
            </div>
            <!-- 3Pada komponent class information tambahkan juga 
                 A. id="pAvailable" pada text-gray
                 B. id="pAvailable" pada text-gray
                 C. id="pAvailable" pada text-gray
                 D. id="pAvailable" pada text-gray

                 Pada section Inputform kita tambahka juga masing2 input id 
                 A. input id=inpname
                 A. input id=inprole
                 A. input id=inpavailability
                 A. input id=inpage
                 A. input id=inplocation
                 A. input id=inpyears
                 A. input id=inpemail

                 pada tombol submit tambahkan onclik dengan function simpanform

                 save.

                -->
            <div class="information">
                <div class="data">
                    <p class="field">Availability</p>
                    <p id="pAvailable" class="text-gray">Full Time</p>
                </div>
                <div class="data">
                    <p class="field">Usia</p>
                    <p id="pAge" class="text-gray">19</p>
                </div>
                <div class="data">
                    <p class="field">Lokasi</p>
                    <p id="pLocation" class="text-gray">Jakarta</p>
                </div>
                <div class="data">
                    <p class="field">Pengalaman</p>
                    <p id="pExperience" class="text-gray">2</p>
                </div>
                <div class="data">
                    <p class="field">Email</p>
                    <p id="pEmail" class="text-gray">email@gmail.com</p>
                </div>
            </div>
        </section>

        <section id="input-form">
            <form method="#" action="#">
                <div class="form">
                    <label>Nama</label>
                    <input id="inpName" type="text" name="nama" placeholder="masukkan nama anda">
                </div>   
                <div class="form">
                    <label>Role</label>
                    <input id="inpRole" type="text" name="role">
                </div>  
                <div class="form">
                    <label>Availability</label>
                    <input id="inpAvailability" type="text" name="Availability">
                </div>  
                <div class="form">
                    <label>Usia</label>
                    <input id="inpUsia" type="number" name="usia">
                </div>  
                <div class="form">
                    <label>Lokasi</label>
                    <input id="inpLokasi" type="text" name="lokasi">
                </div>  
                <div class="form">
                    <label>Years Experience</label>
                    <input id="inpYears" type="number" name="experience">
                </div>  
                <div class="form">
                    <label>Email</label>
                    <input id="inpEmail" type="email" name="email">
                </div>            
                <div class="form">
                    <input onclick="simpanForm()" type="submit" name="submit" value="SUBMIT" class="bg-green">
                </div>
            </form>            
        </section>

         <!-- 4Pertama kita buat sebuah variabel formenu mengarah ke id inputform.
            kemudian formenu kita panggil , kita ubah dan style dan display menjadi none.
            lalu save - debug
            "Halaman Form Hilang" 138-139

            5Fungsiberikutnya seperti editform line144-157 dan simpanform line148-150
            EditForm
            buat logika pada code menggunakan if dg kondisi awal
            formMenu style displaynya none maka akan diubah jadi block, selain itu pada else
            maka tampilannya tetap none.
            simpan - debug

            6Selanjutnya pada line 164 - 172menampilkan nama masuk dalam form nama dsterusnya. 
            caranya buat sebuah variable name kita ambil value dengan id yang sudah didefinisikan tadi cth pName, kemudian ambil innerhtml nya lalu
            pada bagian input nama pada form dg nama id InpName. document.getelementby id
            lalu ubah value menjadi name yang berasal dari variable yang sudah dibuat diatas. 
            save - debug

            QUIZ = lakukan untuk file selanjutnya. 
            save-debug.
        -->


        <script>
            var formMenu = document.getElementById("input-form");
            formMenu.style.display="none";
            
            function editForm(){
                if(formMenu.style.display === "none"){
                    formMenu.style.display = "block";
                }else{
                    formMenu.style.display = "none";
                }

                var name = document.getElementById("pName").innerHTML;
                var role = document.getElementById("pRole").innerHTML;
                var available = document.getElementById("pAvailable").innerHTML;
                var usia = document.getElementById("pAge").innerHTML;
                var lokasi = document.getElementById("pLocation").innerHTML;
                var experience= document.getElementById("pExperience").innerHTML;
                var email = document.getElementById("pEmail").innerHTML;

                document.getElementById("inpName").value=name;
                document.getElementById("inpRole").value=role;
                document.getElementById("inpAvailability").value=available;
                document.getElementById("inpUsia").value=usia;
                document.getElementById("inpLokasi").value=lokasi;
                document.getElementById("inpYears").value=experience;
                document.getElementById("inpEmail").value=email;

            }
            
            function simpanForm(){

            }

            function showMenu()
            {
                var menu = document.getElementById("menu");
                var box = document.getElementById("box-profile");

                if(menu.style.display === "block"){
                    menu.style.display = "none";
                    box.style.paddingTop = "0px";
                }else{
                    menu.style.display = "block";
                    box.style.paddingTop = "125px";
                }
            }
        </script>







    </body>
</html>