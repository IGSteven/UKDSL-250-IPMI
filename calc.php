<?php
if( isset($_POST['server']) ){
        $servernumber = preg_replace("/[^0-9]/", '', $_POST['server']);
        $ipminumber = $servernumber + 174000000;
        $ipmiaddress = long2ip($ipminumber);
        $result = $ipmiaddress;
}
else { $result = ''; }
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900">
    <div class="grid h-screen place-items-center">
        <form class="w-full max-w-sm" id="form" action="/ukdsl/205ipmi.php" meth                                                                                            od="post">
          <div class="text-white text-center capitalize">
                  <h1 class="text-xl"> 205 IPMI Calculator </h1>
                  <h4> by Steven Smith </h4>
                  <br>
          </div>
          <div class="flex items-center border-b border-teal-500 py-2">
                <input class="appearance-none bg-transparent border-none w-full                                                                                             text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" place                                                                                            holder="S-1" aria-label="Full name" id="server" name="server"   >
                <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 borde                                                                                            r-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"                                                                                             type="submit">
                  Calculate
                </button>
          </div>
                <div class="text-white text-m"><br>
                        IPMI ADDRESS: <?php echo $result ?> <br>
                        IPMI NETMASK: 255.255.0.0 <br>
                        IPMI GATEWAY: 10.95.0.1 <br>
                </div>
        </form>
    </div>

<div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3                                                                                             fixed bottom-0 m-4" role="alert">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" view                                                                                            Box="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.51                                                                                            2-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 2                                                                                            0c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0                                                                                            -1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.2                                                                                            33 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2                                                                                            .379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
  <p>I have updated the URL of this page to be not behind cloudflare & locked do                                                                                            wn to certian IPs.</p>
</div>

</body>
