<?php $sslcommerz = app('RKREZA\SSLCOMMERZ\Payment\Standard') ?>

<body data-gr-c-s-loaded="true" cz-shortcut-listen="true">
    You will be redirected to the SSLCOMMERZ website in a few seconds.
    

    <form action="{{ route('sslcommerz.standard.pay') }}" id="sslcommerz_standard_checkout" method="POST">
        @csrf()
        <input value="Click here if you are not redirected within 10 seconds..." type="submit">

        @foreach ($sslcommerz->getFormFields() as $name => $value)

            <input type="hidden" name="{{ $name }}" value="{{ $value }}">

        @endforeach
    </form>

    <script type="text/javascript">
        document.getElementById("sslcommerz_standard_checkout").submit();
    </script>
</body>