<?php
//ConvertTH_EN("วกก.ทด.12/UX๒๒๓๐58");
ConvertTH_EN("วกก.H1-013");
//ConvertTH_EN("TEST22358");
?>

<?php
function ConvertTH_EN($data) 
{	
    $CovertedText = "";
    $CharacterTable = array("ก" => "k", 
                            "ข" => "kh",
                            "ฃ" => "kh",
                            "ค" => "kh",
                            "ฅ" => "kh",
                            "ฆ" => "kh",
                            "ง" => "ng",
                            "จ" => "ch",
                            "ฉ" => "ch",
                            "ช" => "ch",
                            "ซ" => "s",
                            "ฌ" => "ch",
                            "ญ" => "y",
                            "ฎ" => "d",
                            "ฏ" => "t",
                            "ฐ" => "th",
                            "ฑ" => "th",
                            "ฒ" => "th",
                            "ณ" => "n",
                            "ด" => "d",
                            "ต" => "t",
                            "ถ" => "th",
                            "ท" => "th",
                            "ธ" => "th",
                            "น" => "n",
                            "บ" => "b",
                            "ป" => "p",
                            "ผ" => "ph",
                            "ฝ" => "f",
                            "พ" => "ph",
                            "ฟ" => "f",
                            "ภ" => "ph",
                            "ม" => "m",
                            "ย" => "y",
                            "ร" => "r",
                            "ล" => "l",
                            "ว" => "w",
                            "ศ" => "s",
                            "ษ" => "s",
                            "ส" => "s",
                            "ห" => "h",
                            "ฬ" => "l",
                            "อ" => "o",
                            "ฮ" => "h", 
                            "๑" => "1",
                            "๒" => "2",
                            "๓" => "3",
                            "๔" => "4",
                            "๕" => "5",
                            "๖" => "6",
                            "๗" => "7",
                            "๘" => "8",
                            "๙" => "9",
                            "๐" => "0",);

    echo "Original Input : ".$data."<br>";

    $data = trim($data);
    $data = preg_replace('/[^A-Za-z0-9ก-๙\\s]/', '', $data);

    echo "New Input : ".$data."<br>";

    $charArray;
    $length = mb_strlen($data, 'utf-8');
    $strlen = $length;
    
    echo $strlen."<br>"; 
    
    while ($strlen) 
    { 
        $charArray[] = mb_substr($data,0,1,"UTF-8"); //to Character Array
        $data = mb_substr($data,1,$strlen,"UTF-8"); //decrease string by 1
        $strlen = mb_strlen($data); //decrease strlen by 1
    }
    
    print_r($charArray);
    echo "<br>";

    for ($i=0; $i < $length; $i++) 
    {
        if(strcmp('', preg_replace('/[^ก-๙]/', '', $charArray[$i])) == 0)
        {
            $CovertedText .= $charArray[$i];
        }
        else
        {
            $CovertedText .= $CharacterTable[$charArray[$i]];
            echo $charArray[$i]." to ".$CharacterTable[$charArray[$i]]."<br>";
        }            
    }

    echo "Output : ".strtolower($CovertedText)."<br>";
    echo mb_strlen($CovertedText, 'utf-8');

    return strtolower($CovertedText);
}
?>
