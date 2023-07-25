<?php
/**
 * A inteface é como um modelo para as classes que implementarem ela.
 */
interface Crud{
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticia implements Crud {
    public function create($data){
        //L[ogica para inserir uma noticia.
    }

    public function read(){
        //lógica para ler uma noticia.
    }

    public function update(){
        //Lógica para atualizar uma notivicia.
    }

    public function delete(){
        //Lógica para deletar uma noticia.
    }

}