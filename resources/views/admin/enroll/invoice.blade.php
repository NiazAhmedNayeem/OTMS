<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img alt="" src="data:image/jpg;base64,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" />                        </td>

                        <td>
                            Invoice #: 000{{$enroll->id}}<br />
                            Enroll Date: {{$enroll->enroll_date}}<br />
                            Payment Date: {{date('Y-m-d')}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <h4>Created by OTMS</h4>
                            Sparksuite, Inc.<br />
                            12345 Sunny Road<br />
                            Sunnyville, CA 12345
                        </td>

                        <td>
                            <h4>Prepared For</h4>
                            <br />
                            John Doe<br />
                            john@example.com
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>Payment Method</td>

            <td>Amount</td>
        </tr>

        <tr class="details">
            <td>Cash</td>

            <td>{{$enroll->course->fee}}</td>
        </tr>

        <tr class="heading">
            <td>Course Title</td>

            <td>Course Fee</td>
        </tr>

        <tr class="item">
            <td>{{$enroll->course->title}}</td>

            <td>{{$enroll->course->fee}}</td>
        </tr>

        <tr class="item">
            <td>Hosting (3 months)</td>

            <td>$75.00</td>
        </tr>

        <tr class="item last">
            <td>Domain name (1 year)</td>

            <td>$10.00</td>
        </tr>

        <tr class="total">
            <td></td>

            <td>Total: {{$enroll->course->fee}}</td>
        </tr>
    </table>
</div>
</body>
</html>
