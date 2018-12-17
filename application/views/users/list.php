<?
foreach ($users as $user) {
    echo '<a href="/users/view/'
        .$user->id.'">'.
        $user->login .
        '</a><br>';

}
