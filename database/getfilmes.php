<?php
function get_filmes() {
$conn = pg_connect("host=db.fe.up.pt dbname=siem1818 user=siem1818 password=CMHTnbDy");
  if (!$conn) {
    echo "An error occured.\n";
    exit;
  }

/*Definicao e execucao da query para seleção da bdd*/
$query = "set schema 'trabalho2';";	
pg_exec($conn, $query);
	
/*Definicao e execucao da query sql de consulta*/
$query = "select * from filmes;";
$result = pg_exec($conn, $query);

return $result;
pg_close($conn);
}

?>