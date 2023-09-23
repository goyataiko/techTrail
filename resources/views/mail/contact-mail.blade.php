<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Email Title</title>
    <style>
        body {
            background-color: #edf2f7;
        }

        .card {
            max-width: 500px;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0px 0px 20px rgba(10, 10, 10, 0.1);
            border: 1px solid #f0f0f0;
            margin: 40px auto;
            padding: 30px;
        }

        p {
            padding: 10px;
            text-align: left;
            line-height: 2.2rem;
            font-family: "游ゴシック体", 'Montserrat', YuGothic, "游ゴシック", "Yu Gothic", sans-serif;
            font-size: 16px;
        }

        .info p {
            line-height: 1.4rem;
            margin: 0;
            padding: 0;
        }


        @media screen and (max-width: 600px) {
            .card {
                width: 100%;
            }

        }
    </style>
</head>

<body>
    <div class="card">

        <p colspan="2">{{ $mailData['name'] }} 様</p>


        <p colspan="2">お問い合わせいただき、ありがとうございます。以下が、<br>
            お客様からのメッセージです：</p>

        <blockquote>
            {{ $mailData['message'] }}
        </blockquote>

        <p colspan="2">お問い合わせいただき、誠にありがとうございます。<br>
            できる限り迅速に対応させていただきますので、<br>
            お手数をおかけいたしますがしばらく<br>
            お待ちいただけますようお願い申し上げます。<br>


        <p colspan="2">どうぞよろしくお願いいたします。</p>


        <div class="info">
            <p>Tech Trail</p>
            <p>高野 泰光</p>
            <p>070-2839-2550</p>
            <p>goyataiko@gmail.com</p>
        </div>

        </table>
</body>

</html>
