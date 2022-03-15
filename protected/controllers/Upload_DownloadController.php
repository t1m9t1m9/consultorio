<?php

class Upload_DownloadController extends Controller
{
    public function actionIndexArchivos()
    {
        $this->render('indexarchivos');
    }

    public function actionIndexArchivosUsuario()
    {
        $this->render('indexarchivosUsuario');
    }

    public function actionDownload()
    {
        $this->render('descargar');
    }
}