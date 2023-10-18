<?php
class Database 
{
  private $MYSQL_HOST='localhost'; //localhost
  private $MYSQL_USER='root'; // mysql kullanıcı adınız  
  private $MYSQL_PASS='';  // mysql şifreniz
  private $MYSQL_DB='yaprak'; //kendi database adınızı yazın
  private $CHARSET='UTF8';
  private $COLLATION='utf8_general_ci';
  public $pdo=null;
  private $stmt=null;

  public function ConnectDB(){
    //database bağlantısı
    $SQL="mysql:host=".$this->MYSQL_HOST.";dbname=".$this->MYSQL_DB; 
    try{
      $this->pdo=new \PDO($SQL,$this->MYSQL_USER,$this->MYSQL_PASS);
      $this->pdo->exec("SET NAMES '".$this->CHARSET."' COLLATE '".$this->COLLATION."'");
      $this->pdo->exec("SET CHARACTER SET '".$this->CHARSET."'");
      $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
    }catch(PDOException $e){
      die("PDO ile veritabanına ulaşılamadı".$e->getMessage());
    }
  }

  public function __construct(){ 
    //bağlantıyı aç
    $this->ConnectDB();
  }

  private function myQuery($query,$params=null){
    //diğer metodlardaki tekrarlı verileri bitirmek için kullanılan metod
    if(is_null($params)){
      $this->stmt=$this->pdo->query($query);
    }else{
      $this->stmt=$this->pdo->prepare($query);
      $this->stmt->execute($params);
    }
    return $this->stmt;
  }

  public function getRows($query,$params=null){
    //çoklu satır verilerini çekmek için
     try{
        return $this->myQuery($query,$params)->fetchAll();
     }catch(PDOException $e){
      die($e->getMessage());
     }
  }

  public function getRow($query,$params=null){
    //tek satır veri çekmek  için
    try{
       return $this->myQuery($query,$params)->fetch();
    }catch(PDOException $e){
     die($e->getMessage());
    }
 }

 public function getColumn($query,$params=null){
    //tek satırın sütun verisini çekmek için nokta veri alışı
    try{
      return $this->myQuery($query,$params)->fetchColumn();
    }catch(PDOException $e){
    die($e->getMessage());
    }
  }

  public function Insert($query,$params=null){
    //kayıt eklemek için
    try{
       $this->myQuery($query,$params);
       return $this->pdo->lastInsertId();
    }catch(PDOException $e){
    die($e->getMessage());
    }
  }

  public function Update($query,$params=null){
    //kayıt güncellemek için
    try{
      return $this->myQuery($query,$params)->rowCount();
    }catch(PDOException $e){
    die($e->getMessage());
    }
  }

  public function Delete($query,$params=null){
    //kayıt Silmek için
      return $this->Update($query,$params);
  }
	
   public function Limit($query,$p1=1,$p2=null){
	   //limit kayıtlarını pdo ile çekmek için
      $this->stmt=$this->pdo->prepare($query);
      $this->stmt->bindValue(1, $p1, \PDO::PARAM_INT);
      if(!is_null($p2))
      $this->stmt->bindValue(2, $p2, \PDO::PARAM_INT);
      
      $this->stmt->execute();
    return $this->stmt->fetchAll();
  }
  public function __destruct(){
    //bağlantıyı kapat
    $this->pdo=NULL;
  }

  public function CreateDB($query){ 
    //veritabanı oluşturmak için
    $myDB=$this->pdo->query($query.' CHARACTER SET '.$this->CHARSET.' COLLATE '.$this->COLLATION);
    return $myDB;
 }

 public function TableOperations($query){ 
   //tablo operasyonları için
   $myTable=$this->pdo->query($query);
   return $myTable;
 }

 public function Maintenance(){ 
   //tabloların bakımı için
  $myTable=$this->pdo->query("SHOW TABLES");
  $myTable->setFetchMode(\PDO::FETCH_NUM);
  if($myTable){
    foreach($myTable as $items){ 
    $check=$this->pdo->query("CHECK TABLE ".$items[0]);
    $analyze=$this->pdo->query("ANALYZE TABLE ".$items[0]);
    $repair=$this->pdo->query("REPAIR TABLE ".$items[0]);
    $optimize=$this->pdo->query("OPTIMIZE TABLE ".$items[0]);
      if($check == true && $analyze == true && $repair == true && $optimize == true){
        echo $items[0].' adlı Tablonuzun bakımı yapıldı<br>';
      }else{
        echo 'Bir hata oluştuu';
      }
    }
  }
}

}	
?>