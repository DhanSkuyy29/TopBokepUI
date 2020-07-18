<?php

namespace TopBokep\DhanSkuyy;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\command\Command;

use pocketmine\command\CommandSender;

use pocketmine\plugin\Plugin;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat;

use jojoe77777\FormAPI;

class Main extends PluginBase implements Listener

{

    public function onEnable(){

        $this->getServer()->getPluginManager()->registerEvents($this, $this);

    }

    

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {

		switch($cmd->getName()){			case "topbokep":

                $this->bokep($sender);

            break;

        }

        return true;

    }

    public function bokep($sender){

        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

        $form = $api->createSimpleForm(function (Player $sender, int $data = null){

            $result = $data;

            if($result === null){

                return true;

                switch($result){

                    case 0:

                    break;

                }

            }

        });

        $form->setTitle("§l§e10 §aTop Bokep Wanita Dunia");

        $form->setContent("§eIni Lah Top Bokep Wanita Di Dunia");

        $form->addButton("§dSunny Leone\n§cTop Bokep 1", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTu7QGIQn7z1HOILsWFKHGCknP7fIFN7SI9Rw&usqp=CAU.jpg");

        $form->addButton("§5Sasha Grey\n§cTop Bokep 2", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT_uJeSsH_9apoFKI_-1NKxDu0IsnT2L8efnQ&usqp=CAU.jpg");

        $form->addButton("§4Katie Morgan\n§cTop Bokep 3", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSkWnQT0MG3K41WE-jfoFWIhZsT7tc9axFtkg&usqp=CAU.jpg");

        $form->addButton("§1Jenna Haze\n§cTop Bokep 4", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTD8lI3NPi4xMnzoI1X96F_tUFarKC0d2Remw&usqp=CAU.jpg");

        $form->addButton("§cBree Olson\n§dTop Bokep 5", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT7sryR690zM-ajIf7WwlqkB6OeqjLXIyTGzg&usqp=CAU.jpg");

        $form->addButton("§6Maria Takagi\n§cTop Bokep 6", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTuORQGev_VPPb_4ydh7DpT3HOgZp2M6dVKbg&usqp=CAU.jpg");

        $form->addButton("§bTraci Lords\n§cTop Bokep 7", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRi8XcY3fH98PALOQi4JsjL3INxMYLY2oGq-Q&usqp=CAU.jpg");

        $form->addButton("§gJesse Jane\n§cTop Bokep 8", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ1myFXDHGdpbx23KiF9Bq26SfYwOGCKUPV4A&usqp=CAU.jpg");

        $form->addButton("§9Tera Patrick\n§cTop Bokep 9", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQYPUwwVNHVbPuRbH8sMumMYqBpqHKu6Fsy4w&usqp=CAU.jpg");

        $form->addButton("§2Jenna Jameson\n§cTop Bokep 10", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTYg8hSe8yTDSfpngbzG9Rn5CKySuXcn57CcQ&usqp=CAU.jpg");

        $form->sendToPlayer($sender);

        return $form;

    }

}
