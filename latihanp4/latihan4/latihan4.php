<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN-4</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>Form Biodata</h2>
                <form method="POST" action="proseslatihan4.php">
                    <label id="nama" for="nama">NAMA</label>
                    <input type="text" name="nama" class="field" placeholder="Your Name" required>

                    <label id="email" for="email">EMAIL</label>
                    <input type="email" name="email" class="field" placeholder="Your Email" required>

                    <label id="password" for="password">PASSWORD</label>
                    <input type="password" name="password" class="field" placeholder="Password" required>

                    <label for="JK">JENIS KELAMIN</label>
                    <label>
                        <input name="jk" value="pria" type="radio" class="input-radio" checked />Laki-Laki
                        <input name="jk" value="wanita" type="radio" class="input-radio" />Perempuan
                    </label><br>

                    <label for="prefer">APA YANG ANDA INGINKAN?</label>
                    <label><input name="prefer[]" value="php" type="checkbox" class="input-checkbox" />PHP</label>
                    <label><input name="prefer[]" value="java" type="checkbox" class="input-checkbox" />JAVA</label>
                    <label><input name="prefer[]" value="python" type="checkbox" class="input-checkbox" />PYTHON</label>
                    <label><input name="prefer[]" value="javascript" type="checkbox" class="input-checkbox" />JAVASCRIPT</label><br>

                    <textarea name="message" placeholder="Message" class="field" required></textarea>
                    <button type="submit" class="btn">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>