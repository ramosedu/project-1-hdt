<?php
  // for example your user
  $user = 'andrewarrow';

  // A token that you could generate from your own github 
  // go here https://github.com/settings/applications and create a token
  // then replace the next string
   //
  //

  // We generate the url for curl
  $curl_url = 'https://api.github.com/users/' . $user . '/repos';

  // We generate the header part for the token
  

  // We make the actual curl initialization
  $ch = curl_init($curl_url);

  //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  // We set the right headers: any user agent type, and then the custom token header part that we generated
  //curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Awesome-Octocat-App', $curl_token_auth));

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
