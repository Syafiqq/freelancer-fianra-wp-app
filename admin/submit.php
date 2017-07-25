<?php
/**
 * This <fianra-wp-app> project created by :
 * Name         : syafiq
 * Date / Time  : 25 July 2017, 9:10 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

if (isset($_POST['bobot']) && isset($_POST['res']))
{
    $result = $_POST;
    mysql_connect("localhost", "root", "");
    mysql_select_db("guru_wp");
    $sql = "INSERT INTO result (timestamp, cr1, cr2, cr3, cr4, cr5, cc1, cc2, cc3, cc4, cc5) values(CURRENT_TIMESTAMP, 
                                            {$result['bobot']['raw']['c1']},
                                            {$result['bobot']['raw']['c2']},
                                            {$result['bobot']['raw']['c3']},
                                            {$result['bobot']['raw']['c4']},
                                            {$result['bobot']['raw']['c5']},
                                            {$result['bobot']['computed']['c1']},
                                            {$result['bobot']['computed']['c2']},
                                            {$result['bobot']['computed']['c3']},
                                            {$result['bobot']['computed']['c4']},
                                            {$result['bobot']['computed']['c5']}
                                            )";
    $query = mysql_query($sql) or die(mysql_error());
    $_id = mysql_insert_id();
    foreach ($result['res'] as $v)
    {
        $sql = "INSERT INTO result_kriteria(result, nik, c1, c2, c3, c4, c5, res, rnk) VALUES (
                                        {$_id},
                                        {$v['nik']},
                                        {$v['c1']},
                                        {$v['c2']},
                                        {$v['c3']},
                                        {$v['c4']},
                                        {$v['c5']},
                                        {$v['res']},
                                        {$v['rnk']}
                                        )";
        $query = @mysql_query($sql) or die(@mysql_error());
    }
    echo json_encode("1");
}

?>

