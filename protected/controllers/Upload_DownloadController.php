<?php

class Upload_DownloadController extends Controller
{
    public function actionIndexArchivos()
    {
        $this->render('indexarchivos');
    }

    public function actionDownload()
    {
        $this->render('download');
    }
}