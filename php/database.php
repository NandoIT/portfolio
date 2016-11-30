<?php
  $server_config = parse_ini_file("config.ini"); // Load database configuration

  try {
    $conn = new PDO(
      "mysql:host=" . $server_config['host'] .
      ";dbname=" . $server_config['database'], $server_config['user'],
      $server_config['password']
    );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($server_config['debug']){
      echo "<div class=\"container\"><pre style='color: #0f0; border: none;background-color: black;font-size: 1.5em'><span style='color: #ccc'>Message from Server-Senpai:</span> MySQL Connection has been Established. Have a Nice day, " . shell_exec("whoami") . "</pre></div>";
    };
  }
  catch(PDOException $e) {
    if ($server_config['debug']){
      echo "<div class=\"container\"><pre style='color: #0f0; border: none;background-color: black;font-size: 1.5em'><span style='color: #f00'><span style='color: #ccc'>Message from Server-Senpai:</span> MySQLConnection failed:</span> " . $e->getMessage() . "</pre></div>";
    };
  }
?>