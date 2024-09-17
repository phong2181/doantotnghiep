<!DOCTYPE html>
<html>

<head>
    @include('AdminView.Compponant.head');

</head>

<body>
    <div id="wrapper">
        @include('AdminView.Compponant.Sidebar');

        <div id="page-wrapper" class="gray-bg">
            @include('AdminView.Compponant.nav');
            @include($template);

            @include('AdminView.Compponant.footer');

        </div>
    </div>

    @include('AdminView.Compponant.Script');
</body>
</html>
