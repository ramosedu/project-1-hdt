<?php
   $agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:51.0) Gecko/20100101 Firefox/51.0";
  // We make the actual curl initialization
  $ch = curl_init("https://api.github.com/users/andrewarrow/repos");
  curl_setopt($ch, CURLOPT_USERAGENT, $agent);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  // We execute the curl
  $output = curl_exec($ch);
  //echo var_dump($output);

  // And we make sure we close the curl       
  curl_close($ch);

  // Then we decode the output and we could do whatever we want with it
  $output = json_decode($output);

  $count = 1001; 

  if (!empty($output)) {
    // now you could just foreach the repos and show them
    foreach ($output as $repo) { ?>
		            <tr>
                  <td><?= $count ?> </td>
                  <td><a href="<?=$repo->html_url?>"><?= $repo->name ?></a></td>
                  <td><?= $repo->size ?></td>
                  <td><?= $repo->id ?></td>
                  <td><?= $repo->fork ?></td>
                </tr>
                <? $count = $count + 1;?>
                <?
    }
  }




?>
