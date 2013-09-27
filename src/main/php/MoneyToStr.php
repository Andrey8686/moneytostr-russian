<?php
/*
 * $Id$
 *
 * Copyright 2013 Valentyn Kolesnikov
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
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

    const NUM0 = 0;
    const NUM1 = 1;
    const NUM2 = 2;
    const NUM3 = 3;
    const NUM4 = 4;
    const NUM5 = 5;
    const NUM6 = 6;
    const NUM7 = 7;
    const NUM8 = 8;
    const NUM9 = 9;
    const NUM10 = 10;
    const NUM11 = 11;
    const NUM12 = 12;
    const NUM100 = 100;
    const NUM1000 = 1000;
    const NUM10000 = 10000;
    const INDEX_0 = 0;
    const INDEX_1 = 1;
    const INDEX_2 = 2;
    const INDEX_3 = 3;
    private $currency, $language, $pennies, $messages;
    private $rubOneUnit, $rubTwoUnit, $rubFiveUnit, $kopOneUnit, $kopTwoUnit, $kopFiveUnit, $rubSex, $kopSex;

    public function __construct($currency, $language, $pennies) {
        $this->currency = $currency;
        $this->language = $language;
        $this->pennies = $pennies;
        $languageElement = $language;
        $items = $this->currencyList['CurrencyList'][$languageElement]['item'];
        $this->messages = array();
        foreach ($items as $languageItem) {
            if ($languageItem["-text"] != null) {
                $this->messages[$languageItem["-value"]] = explode(",", $languageItem["-text"]);
            }
        }
        $currencyItem = $this->currencyList['CurrencyList'][$currency];
        $theISOElement = null;
        foreach ($currencyItem as $item) {
            if ($item["-language"] == $language) {
                $theISOElement = $item;
                next;
            }
        }
        if (theISOElement == null) {
            throw new Exception("Currency not found " . $currency);
        }
        $this->rubOneUnit = $theISOElement["-RubOneUnit"];
        $this->rubTwoUnit = $theISOElement["-RubTwoUnit"];
        $this->rubFiveUnit = $theISOElement["-RubFiveUnit"];
        $this->kopOneUnit = $theISOElement["-KopOneUnit"];
        $this->kopTwoUnit = $theISOElement["-KopTwoUnit"];
        $this->kopFiveUnit = $theISOElement["-KopFiveUnit"];
        $this->rubSex = $theISOElement["-RubSex"];
        $this->kopSex = $theISOElement["-KopSex"];
    }

    public function data() {
        return $this->currencyList;
    }
}

    echo "Starting Iteration[" . (new MoneyToStr("UAH", "UKR", "TEXT"))->data()["CurrencyList"]["language"]["-value"] . "]\n\r";
    for ($i=0;$i<10000;$i++) {
        echo "\r" . $i;
    }
    echo "Ending Iteration" . "\n\r";
?>
