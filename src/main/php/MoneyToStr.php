<?php
class StringBuilder {
    var $_buffer;

    public function __construct() {
        $_buffer = array();
    }

    public function append($text) {
        $_buffer.append($text);
        return this;
    }

    public function insert($index, $text) {
        $_buffer.insert($index, $text);
        return this;
    }

    public function length() {
        return toString().length();
    }

    public function deleteCharAt($index) {
        $str = toString();
        $_buffer = array();
        append($str.substring(0, $index));
        return this;
    }

    public function toString() {
        return join("", $_buffer);
    }
}
class MoneyToStr {
    var $currencyList = array(
  "CurrencyList" => array(
    "language" => array( "-value" => "UKR" ),
    "UKR" => array(
      "item" => array(
        array(
          "-value" => "0",
          "-text" => "����"
        ),
        array(
          "-value" => "1000_10",
          "-text" => "�����,�������,�������,���������"
        ),
        array(
          "-value" => "1000_1",
          "-text" => "������,������,������,��������"
        ),
        array(
          "-value" => "1000_234",
          "-text" => "������,�������,�������,���������"
        ),
        array(
          "-value" => "1000_5",
          "-text" => "�����,�������,�������,���������"
        ),
        array(
          "-value" => "10_19",
          "-text" => "������,����������,����������,����������,������������,����������,�i���������,�i��������,�i�i��������,���'���������"
        ),
        array(
          "-value" => "1",
          "-text" => "����,����,����,����"
        ),
        array(
          "-value" => "2",
          "-text" => "��,���,���,��"
        ),
        array(
          "-value" => "3_9",
          "-text" => "���,������,����,�����,��,���,������"
        ),
        array(
          "-value" => "100_900",
          "-text" => "��� ,���� ,������ ,��������� ,������ ,������� ,����� ,������ ,�������� "
        ),
        array(
          "-value" => "20_90",
          "-text" => "�������� ,�������� ,����� ,�������� ,��������� ,������� ,�������� ,��������� "
        )
      )
    ),
    "RUS" => array(
      "item" => array(
        array(
          "-value" => "0",
          "-text" => "����"
        ),
        array(
          "-value" => "1000_10",
          "-text" => "�����,���������,����������,����������"
        ),
        array(
          "-value" => "1000_1",
          "-text" => "������,�������,��������,��������"
        ),
        array(
          "-value" => "1000_234",
          "-text" => "������,��������,���������,���������"
        ),
        array(
          "-value" => "1000_5",
          "-text" => "�����,���������,����������,����������"
        ),
        array(
          "-value" => "10_19",
          "-text" => "������,�����������,����������,����������,������������,����������,�����������,����������,������������,������������"
        ),
        array(
          "-value" => "1",
          "-text" => "����,����,����,����"
        ),
        array(
          "-value" => "2",
          "-text" => "���,���,���,���"
        ),
        array(
          "-value" => "3_9",
          "-text" => "���,������,����,�����,����,������,������"
        ),
        array(
          "-value" => "100_900",
          "-text" => "��� ,������ ,������ ,��������� ,������� ,�������� ,������� ,��������� ,��������� "
        ),
        array(
          "-value" => "20_90",
          "-text" => "�������� ,�������� ,����� ,��������� ,���������� ,��������� ,����������� ,��������� "
        )
      )
    ),
    "ENG" => array(
      "item" => array(
        array(
          "-value" => "0",
          "-text" => "zero"
        ),
        array(
          "-value" => "1000_10",
          "-text" => "thousand,million,billion,trillion"
        ),
        array(
          "-value" => "1000_1",
          "-text" => "thousand,million,billion,trillion"
        ),
        array(
          "-value" => "1000_234",
          "-text" => "thousand,million,billion,trillion"
        ),
        array(
          "-value" => "1000_5",
          "-text" => "thousand,million,billion,trillion"
        ),
        array(
          "-value" => "10_19",
          "-text" => "ten,eleven,twelve,thirteen,fourteen,fifteen,sixteen,seventeen,eighteen,nineteen"
        ),
        array(
          "-value" => "1",
          "-text" => "one,one,one,one"
        ),
        array(
          "-value" => "2",
          "-text" => "two,two,two,two"
        ),
        array(
          "-value" => "3_9",
          "-text" => "three,four,five,six,seven,eight,nine"
        ),
        array(
          "-value" => "100_900",
          "-text" => "one hundred ,two hundred ,three hundred ,four hundred ,five hundred ,six hundred ,seven hundred ,eight hundred ,nine hundred "
        ),
        array(
          "-value" => "20_90",
          "-text" => "twenty-,thirty-,forty-,fifty-,sixty-,seventy-,eighty-,ninety-"
        )
      )
    ),
    "RUR" => array(
      array(
        "-CurrID" => "810",
        "-CurrName" => "���������� �����",
        "-language" => "RUS",
        "-RubOneUnit" => "�����",
        "-RubTwoUnit" => "�����",
        "-RubFiveUnit" => "������",
        "-RubSex" => "M",
        "-KopOneUnit" => "�������",
        "-KopTwoUnit" => "�������",
        "-KopFiveUnit" => "������",
        "-KopSex" => "F"
      ),
      array(
        "-CurrID" => "810",
        "-CurrName" => "���������� �����",
        "-language" => "UKR",
        "-RubOneUnit" => "�����",
        "-RubTwoUnit" => "�����",
        "-RubFiveUnit" => "�����",
        "-RubSex" => "M",
        "-KopOneUnit" => "������",
        "-KopTwoUnit" => "������",
        "-KopFiveUnit" => "������",
        "-KopSex" => "F"
      )
    ),
    "UAH" => array(
      array(
        "-CurrID" => "980",
        "-CurrName" => "�������� �����",
        "-language" => "RUS",
        "-RubOneUnit" => "������",
        "-RubTwoUnit" => "������",
        "-RubFiveUnit" => "�������",
        "-RubSex" => "F",
        "-KopOneUnit" => "�������",
        "-KopTwoUnit" => "�������",
        "-KopFiveUnit" => "������",
        "-KopSex" => "F"
      ),
      array(
        "-CurrID" => "980",
        "-CurrName" => "�������� �����",
        "-language" => "UKR",
        "-RubOneUnit" => "������",
        "-RubTwoUnit" => "�����",
        "-RubFiveUnit" => "�������",
        "-RubSex" => "F",
        "-KopOneUnit" => "������",
        "-KopTwoUnit" => "������",
        "-KopFiveUnit" => "������",
        "-KopSex" => "F"
      )
    ),
    "USD" => array(
      array(
        "-CurrID" => "840",
        "-CurrName" => "������ ���",
        "-language" => "RUS",
        "-RubOneUnit" => "�����",
        "-RubTwoUnit" => "������",
        "-RubFiveUnit" => "������",
        "-RubSex" => "M",
        "-KopOneUnit" => "����",
        "-KopTwoUnit" => "����",
        "-KopFiveUnit" => "������",
        "-KopSex" => "M"
      ),
      array(
        "-CurrID" => "840",
        "-CurrName" => "������ ���",
        "-language" => "UKR",
        "-RubOneUnit" => "�����",
        "-RubTwoUnit" => "������",
        "-RubFiveUnit" => "������",
        "-RubSex" => "M",
        "-KopOneUnit" => "����",
        "-KopTwoUnit" => "����",
        "-KopFiveUnit" => "�����",
        "-KopSex" => "M"
      ),
      array(
        "-CurrID" => "840",
        "-CurrName" => "������ ���",
        "-language" => "ENG",
        "-RubOneUnit" => "dollar",
        "-RubTwoUnit" => "dollars",
        "-RubFiveUnit" => "dollars",
        "-RubSex" => "M",
        "-KopOneUnit" => "cent",
        "-KopTwoUnit" => "cents",
        "-KopFiveUnit" => "cents",
        "-KopSex" => "M"
      )
     ),
    "PER10" => array(
      array(
        "-CurrID" => "556",
        "-CurrName" => "�i������ � �������� ���������",
        "-language" => "RUS",
        "-RubOneUnit" => "�����,",
        "-RubTwoUnit" => "�����,",
        "-RubFiveUnit" => "�����,",
        "-RubSex" => "F",
        "-KopOneUnit" => "������� ��������",
        "-KopTwoUnit" => "������� ��������",
        "-KopFiveUnit" => "������� ��������",
        "-KopSex" => "F"
      ),
      array(
        "-CurrID" => "556",
        "-CurrName" => "�i������ � �������� ���������",
        "-language" => "UKR",
        "-RubOneUnit" => "����,",
        "-RubTwoUnit" => "�����,",
        "-RubFiveUnit" => "�����,",
        "-RubSex" => "F",
        "-KopOneUnit" => "������ �������",
        "-KopTwoUnit" => "������� �������",
        "-KopFiveUnit" => "������� �������",
        "-KopSex" => "F"
      )
    ),
    "PER100" => array(
      array(
        "-CurrID" => "557",
        "-CurrName" => "�i������ � ������ ���������",
        "-language" => "RUS",
        "-RubOneUnit" => "�����,",
        "-RubTwoUnit" => "�����,",
        "-RubFiveUnit" => "�����,",
        "-RubSex" => "F",
        "-KopOneUnit" => "����� ��������",
        "-KopTwoUnit" => "����� ��������",
        "-KopFiveUnit" => "����� ��������",
        "-KopSex" => "F"
      ),
      array(
        "-CurrID" => "557",
        "-CurrName" => "�i������ � ������ ���������",
        "-language" => "UKR",
        "-RubOneUnit" => "����,",
        "-RubTwoUnit" => "�����,",
        "-RubFiveUnit" => "�����,",
        "-RubSex" => "F",
        "-KopOneUnit" => "���� �������",
        "-KopTwoUnit" => "����� �������",
        "-KopFiveUnit" => "����� �������",
        "-KopSex" => "F"
      )
    ),
    "PER1000" => array(
      array(
        "-CurrID" => "558",
        "-CurrName" => "�i������ � ��������� ���������",
        "-language" => "RUS",
        "-RubOneUnit" => "�����,",
        "-RubTwoUnit" => "�����,",
        "-RubFiveUnit" => "�����,",
        "-RubSex" => "F",
        "-KopOneUnit" => "�������� ��������",
        "-KopTwoUnit" => "�������� ��������",
        "-KopFiveUnit" => "�������� ��������",
        "-KopSex" => "F"
      ),
      array(
        "-CurrID" => "558",
        "-CurrName" => "�i������ � ��������� ���������",
        "-language" => "UKR",
        "-RubOneUnit" => "����,",
        "-RubTwoUnit" => "�����,",
        "-RubFiveUnit" => "�����,",
        "-RubSex" => "F",
        "-KopOneUnit" => "������� �������",
        "-KopTwoUnit" => "�������� �������",
        "-KopFiveUnit" => "�������� �������",
        "-KopSex" => "F"
      )
    ),
    "PER10000" => array(
      array(
        "-CurrID" => "559",
        "-CurrName" => "�i������ � ������ ��������� ���������",
        "-language" => "RUS",
        "-RubOneUnit" => "�����,",
        "-RubTwoUnit" => "�����,",
        "-RubFiveUnit" => "�����,",
        "-RubSex" => "F",
        "-KopOneUnit" => "�������������� ��������",
        "-KopTwoUnit" => "�������������� ��������",
        "-KopFiveUnit" => "�������������� ��������",
        "-KopSex" => "F"
      ),
      array(
        "-CurrID" => "559",
        "-CurrName" => "�i������ � ������ ��������� ���������",
        "-language" => "UKR",
        "-RubOneUnit" => "����,",
        "-RubTwoUnit" => "�����,",
        "-RubFiveUnit" => "�����,",
        "-RubSex" => "F",
        "-KopOneUnit" => "������������� �������",
        "-KopTwoUnit" => "�������������� �������",
        "-KopFiveUnit" => "�������������� �������",
        "-KopSex" => "M"
      )
    )
  ));

    public function get() {
        return $this->$currencyList;
    }
}

    $data = new MoneyToStr().get();    
    echo "Starting Iteration" . "\n\r";
    for ($i=0;$i<10000;$i++) {
        echo "\r" . $i;
    }
    echo "Ending Iteration" . "\n\r";
?>
