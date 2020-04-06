<?php
class BigInteger {
 private $ana;
 private $ilave;
 function __construct(string $rakam='0') {
  $this->ana=$rakam;
 }

 function add(string $rakam) {
  $aa=$this->ana;
  $this->ana = '';
  $bb=$rakam;
  for($i=0; $i<5; $i++) {
   $zz = (int) substr($aa, -18) + (int) substr($bb, -18);
   $aa = substr($aa, 0, -18); $bb=substr($bb, 0, -18);
   if($zz>=10**18) { $zz=substr((string) $zz, -18); $aa=$aa+1; }
   if(!empty($aa)) { $zz=str_pad($zz, 18, '0', STR_PAD_LEFT); }
   $this->ana = (string)$zz.$this->ana;
   if(empty($aa) AND empty($bb)) { break; }
  }
  return $this->ana;
 }
}

