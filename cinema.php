{ 
     if  ( $this - > urlInput - > checkPost ( ) )  { 
         $url  =  $this - > urlInput - > getUrl ( ) ; 
         // ----------------- // 
         $ arricciacapelli = nuovo arricciacapelli ( ) ; 
         $startPage  =  nuova pagina  iniziale ( $url ,  $curler ) ; 
         $startPage- > getStartLinks ( ) ; 
         // giorni ogni corpo può 
         $calander  =  new  Calander ( $url  .  $startPage- > getCalanderLink ( ) , $  curler ) ; 
         $daysEvaeyBodyCan  =  $ calander - > getDayEverybodyCan ( ) ; 
         $cinema  =  nuovo  cinema ( $url  .  $startPage - > getCinemaLink ( ) ,  $curler , $daysEvaeyBodyCan ) ; 
         $filmsForXDays  =  $cinema - > getMoviesFromDays ( ) ; 
         $dataPresenter  = nuovo PresentDataView ( ) ; 
         $ this- > html = $ dataPresenter- > generaHTML ( $ filmsForXDays ) ; } altro { $this - > html = $this - > urlInput - > generateInputField ( )  
     
           ; 
     } 
 }
ESEMPIO #30
File: CinemaFetcher.php Progetto: Witoso/cinema_app
public  function  getCinemasFromDb ( $columnsNames  =  [ "id" ,  "name" ,  "address" ] ) 
 { 
     if  ( è _matrice ( $Nomicolonne )  &&  ! vuoto ( $Nomicolonne ) )  { 
         $colonne  =  implode ( "," ,  $colonneNomi ) ; 
         $sqlQuery  =  "SELEZIONE" . $colonne .  "Cinema DAI" ; 
         $collegamento  = genitore :: getConnection ( ) ; _ $risultato = $ conn- > interrogazione ( $sqlQuery ) ; if ( $risultato- > num_righe > 0 ) { while ( $ riga = $ risultato- > fetch_assoc ( ) ) { $ cinema = new Cinema ( genitore :: getConnection ( ) ) ; Se
           
             
                 
                    
                  ( array_key_exists ( "id" ,  $row ) )  { 
                     $cinema - > setId ( $row [ "id" ] ) ; 
                 } 
                 if  ( array_key_exists ( "nome" ,  $riga ) )  { 
                     $cinema - > setName ( $row [ "nome" ] ) ; 
                 } 
                 if  ( array_key_exists ( "indirizzo" ,  $riga ) )  {
                     $cinema - > setIndirizzo ( $row [ "indirizzo" ] ) ; 
                 } 
                 $ this- > setArrayWithCinemas ( $cinema ) ; } } } }
             
         
     
 
ESEMPIO #40
File: index.php Progetto: webstylecenter/CinemaScript
<!DOCTYPE>
<testa> 
    < title > Biografia </ title > 
    < link  rel = " stylesheet "  href = " css/style.css " > 
    <?php 
// echo '<meta http-equiv="refresh" content="0"> '; 
?> 
</ head > 
< corpo > 
< pre > 
<?php 
$inizio  =  microtempo ( vero ) ; 
$visitatori  =  300 ;
  
$postioccupati=NULL; 
$cinema  = nuovo cinema ( $maxAmount ,  $takeSeats ) ; 
$cinema - > giveSeatNumbers ( $visitors ) ; 
?> 
</ pre >

<?php  
echo  '<p>Ha preso '  .  ( microtempo ( true )  -  $ start )  .  ' secondi al posizionamento '  .  $visitatori  .  ' in un cinema di '  .  $maxAmount  .  '</p>' ; 
?>

< div  id = " cinema " > 
    <?php  
$ cinema- > showSeats ( ) ; 
?> 
</ div > 
< p >    </ p > 
</ corpo >
ESEMPIO #50
File: showInfo.php Progetto: Witoso/cinema_app
            $dateFormatted  =  substr ( $date ,  0 ,  16 ) ; 
            $screeningId  =  $screening - > getId ( ) ; 
            echo  "<li>Cinema: <a href='showInfo.php?type=cinema&id= { $cinemaId } '> { $cinemaName } </a>, data e ora: { $dateFormatted } " ; 
            renderTicketForm ( $screeningId ) ; 
            echo  "</li>" ; 
        } 
        echo  "</ul>"
    }  else  { 
        echo  "<p>Nessuna proiezione</p>" ; 
    } 
} 
if  ( $_SERVER [ "REQUEST_METHOD" ]  ===  "GET"  &&  $_GET [ "type" ]  ===  "cinema" )  { 
    $id  =  $_GET [ "id" ] ; 
    $db  =  DATABASE : : getInstance ( ) ; 
    $mysqli  =  $db - > getConnection ( ) ;
      nuovo  Cinema ( $mysqli ) ; 
    $cinema - > findCinemaById ( $id ) ; 
    $cinemaName  =  $cinema - > getName ( ) ; 
    $cinemaAddress  =  $cinema - > getAddress ( ) ; 
    echo  "<h3>Nome: { $cinemaName } </h3>" ; 
    echo  "<p>Indirizzo: { $indirizzocinema } </p>" ; 
    echo  "<h3>Proiezioni cinematografiche:</h3>"; 
    $fetcher  =  nuovo  ScreeningFetcher ( $db ) ; 
    $fetcher - > getCinemaScreenings ( $id ) ; 
    $screeningsArray  =  $fetcher - > getArrayWithCinemaScreenings ( ) ; 
    if  ( ! vuoto ( $screeningsArray ) )  { 
        echo  "<ul>" ; 
        foreach  ( $screeningsArray  as  $screening )  { 
            $movieName  =  $screening- > getMovie ( ) - > getName ( ) ; 
            $movieId  =  $proiezione - > getMovie ( ) - > getId ( ) ; 
            $date  =  $screening - > getDate ( ) ;
ESEMPIO #60
File: addCinema.php Progetto: Witoso/cinema_app
<?php

require_once  "../classes/Database.php" ; 
require_once  "../classes/Cinema.php" ; 
if  ( $_SERVER [ "REQUEST_METHOD" ]  ===  "POST"  &&  isset ( $_POST [ "cinema_name" ] ) )  { 
    $name  =  htmlentities ( $_POST [ "cinema_name" ] ) ; 
    $indirizzo  =  htmlentities ( $_POST [ "indirizzo_cinema" ] ) ;
      : : getInstance ( ) ; 
    $mysqli  =  $db - > getConnection ( ) ; 
    $cinema  =  nuovo  cinema ( $mysqli ) ; 
    $ cinema- > impostaNome ( $nome ) ; 
    $cinema - > setIndirizzo ( $indirizzo ) ; 
    $cinema - > addToDatabase ( ) ; 
    header ( "posizione: adminPanel.php" ) ;
}  else  { 
    header ( "location: adminPanel.php" ) ; 
}
ESEMPIO #70
File: GncAdapter.php Progetto: xxdf/showtimes
 public  function  scrape ( ) 
 { 
     $url  =  'http://www.gnccinemas.com.br/conteudo/home.asp' ; 
     $referer  =  'http://www.gnccinemas.com.br/conteudo/home.asp' ; 
     $curl_handle  =  curl_init ( ) ; 
     /*
     	TODO adicionar controle de excecao, por tempo
     		 fazer essa chamada mais generica
     */ 
     curl_setopt ( $curl_handle ,  CURLOPT_URL ,  $url ) ; 
     curl_setopt ( $curl_handle ,  CURLOPT_POST ,  1 ) ; 
     curl_setopt ( $curl_handle ,  CURLOPT_POSTFIELDS ,  'CodCidade=1' ) ; 
     curl_setopt ( $curl_handle ,  CURLOPT_REFERER ,  $referer ) ; 
     curl_setopt ( $curl_handle ,  CURLOPT_CONNECTTIMEOUT ,  2 ) ;
     curl_setopt ( $curl_handle ,  CURLOPT_FOLLOWLOCATION ,  vero ) ; 
     curl_setopt ( $curl_handle ,  CURLOPT_USERAGENT ,  'Firefox' ) ; 
     curl_setopt ( $curl_handle ,  CURLOPT_RETURNTRANSFER ,  1 ) ; 
     $buffer  =  curl_exec ( $curl_handle ) ; 
     curl_close ( $curl_handle ) ; 
     $cinema  =  nuovo  cinema ( ) ; 
     $cinema- > name  =  'Teste GNC' ; 
     $cinema - > indirizzo  =  'Rua X' ; 
     $cinema - > telefono  =  '123' ; 
     $cinema - > biglietto  =  '456' ; 
     //phpQuery::$debug = 1; 
     if  ( ! vuoto ( $ buffer ) )  { 
         phpQuery : : newDocument ( $ buffer ) ; 
         $linea  =  pq ( 'td.td_pontilhada_l0t0r0b0') ; 
         $trs  =  pq ( 'table tr' ,  $line ) ; 
         $htmlSalas  =  pq ( '.topo_tabela_azul4[width="210"]' ) ; 
         /**
         qui pega o link para o cinema do grupo. Deve fazer um novo curl para pegar o endereco
         foreach($htmlSalas as $sala){
         	echo trim(pq('a',$sala)->attr('href'));
         }
         */ 
         //$filmes = pq('div.a ,div.b', $prog); 
         foreach  ( $trs  come  $chiave  = >  $valore )  { 
             /*
              echo '<pre>';
              print_r(pq($value)->html());
              echo '</pre>';
              Restituzione;
             */ 
             $filme  =  trim ( pq ( 'a.nome_filme_programacao-home' ,  $value ) - > text ( ) ) ; 
             if  ( vuoto ( $ film ) )  { 
                 continuare ; 
             } 
             $showtimes  =  trim ( pq ( '.horarios_programacao-home' ,  $value ) - > text ( ) ) ; 
             $showtimes  =  esplodi ( " - ",  $ orari di programmazione ) ; 
             /*$censura = trim(pq('input',$value)->attr('value'));
             
             				$legenda = pq('div.legenda span',$value)->attr('onmouseover');
             				$legenda = strtolower($legenda);
             
             				$pattern = '(leggendario|duplicato|nazionale)';
             				preg_match($pattern, $legenda, $match);
             
             				$legenda = trim($matches[0]);		
             
             				$horarios = pq('div.horas > span', $value);		
             */ 
             $filme_horarios  =  nuovo  film ( ) ; 
             $filme_horarios - > nome  =  $filme ; 
             $filme_horarios - > età  =  "censura" ; 
             //$censura; 
             $filme_horarios - > sottotitolo  =  "leggenda" ; 
             //$leggenda; 
             //verificar se nao e' possivel passar a list de directamente para o showtimes 
             $filme_horarios - > showtime  =  $showtimes ; 
             /*
             				foreach ($horarios as $key => $value) {
             					$orario = pq($valore)->testo();
             					if (!vuoto($orario)) {
             						$filme_horarios->set_showtime($horario);
             					}			
             				}
             */ 
             $ cinema- > set_movie ( $filme_horarios ) ; 
         } 
         return  $cinema ; 
         // echo '<pre>'; 
         // stampa_r($cinema); 
         // echo '</pre>'; 
     } 
 }
ESEMPIO #80
File: addScreening.php Progetto: Witoso/cinema_app
<?php

require_once  "../classes/Database.php" ; 
require_once  "../classes/Screening.php" ; 
require_once  "../classes/Movie.php" ; 
require_once  "../classes/Cinema.php" ; 
if  ( $_SERVER [ "REQUEST_METHOD" ]  ===  "POST"  &&  isset ( $_POST [ "movie" ] ) )  { 
    $movieId  =  $_POST [ "movie" ] ; 
    $cinemaId  =  $_POST [ "cinema"
    $dateFormatted  =  str_replace ( "T" ,  " " ,  $_POST [ "date" ] ) ; 
    $db  =  DATABASE : : getInstance ( ) ; 
    $mysqli  =  $db - > getConnection ( ) ; 
    $film  =  nuovo  film ( $mysqli ) ; 
    $film - > findMovieById ( $movieId ) ; 
    $cinema  =  nuovo  cinema( $mysqli ) ; 
    $cinema - > findCinemaById ( $cinemaId ) ; 
    $screening  =  nuovo  Screening ( $mysqli ) ; 
    $proiezione - > setMovie ( $movie ) ; 
    $proiezione - > setCinema ( $cinema ) ; 
    $screening- > setDate ( $ dateFormatted ) ; $screening - > addToDatabase ( )
    ; 
    header ( "posizione: adminPanel.php" ) ; 
}
ESEMPIO #90
File: ScreeningFetcher.php Progetto: Witoso/cinema_app
 public  function  getCinemaScreenings ( $id ) 
 { 
     $sqlQuery  =  "SELECT id, cinema_id, movie_id, date FROM proiezioni WHERE data > NOW() AND cinema_id = { $id } ORDER BY data " ; 
     $ conn  =  genitore :: getConnection ( ) ; $result = $conn - > query ( $sqlQuery ) ; if ( $risultato - > num_righe > 0 ) { while (
       
         
          lista ( $id ,  $cinemaId ,  $movieId ,  $date )  =  $ result- > fetch_array ( MYSQLI_NUM ) )  { 
             $movie  =  nuovo  film ( $conn ) ; 
             $film - > findMovieById ( $movieId ) ; 
             $cinema  =  nuovo  cinema ( $conn ) ; 
             $cinema - > findCinemaById ( $cinemaId ) ;
             $screening  =  nuovo  Screening ( $conn ) ; 
             $proiezione - > setMovie ( $movie ) ; 
             $proiezione - > setCinema ( $cinema ) ; 
             $screening- > setDate ( $ date ) ; $screening - > setId ( $id ) ; $ this- > setArrayWithCinemaScreenings ( $proiezione ) ; } } }
             
             
         
     
 
ESEMPIO #100
File: attività.php Progetto: cvexa/onemanarmy
        echo  "biglietti -"  .  $this - > biglietti  .  "<br>" ; 
        echo  "film mostrati -"  .  $this - > mostra_film  .  "<br>" ; 
    } 
    funzione  __construct ( $nome ,  $em ,  $annuncio ,  $tick ,  $mostra ) 
    { 
        $this- > nome =  $  nome ; 
        $this - > impiegato  =  $em ; 
        $questo - >indirizzo  =  $ annuncio ; 
        $this - > ticket  =  $tick ; 
        $this - > show_movies  =  $show ; 
    } 
} 
class  Hot_movies  estende  Cinema 
{ 
    public  static  $premiere  =  "Warcraft" ; 
} 
$Imax  =  new  Cinema ( 'Cinema city' ,  2 ,  'Blabla #55' ,  200 ,  5 ) ; 
$Imax - >info_stampa ( ) ; 
echo  "Film in anteprima in tutti i cinema :<br>"  . Hot_movies : : $prima  .  "<br>" ; 
echo  "<pre>" ; 
echo  $Imax - > vendita ( 5 ) ; 
echo  "<br>" ; 
echo  $Imax - > vendita ( 10 ) ; 
echo  "</pre>" ; 
$d2  =  nuovo  cinema ( 'Burgas Cinema' ,  'Lalala #21' ,  100 ,  2 ) ; 
$d2 - > stampa_info ( ) ; 
echo  "<pre>" ; 
echo  $d2 - > vendita ( 1 ) ; 
echo  "<br>" ; 
echo  $d2 - > vendita ( 2 ) ; 
echo  "</pre>" ;