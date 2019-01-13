@extends('layouts.backend')

@section('title','Mamba')

@section('header')
    <h1>
        Home
        <small>Mamba Blog</small>
    </h1>
@endsection

@section('content')
    <style>
        p {
            text-indent: 10px;
        }
    </style>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid" style="padding: 10px;">
                <h3>欢迎使用Mamba Blog!</h3>
                <strong>简介</strong>
                <p> Mamba Blog 是一个基于bmob后端云开发,使用mpvue框架搭建,支持markdown语法的简易博客小程序。</p>
                <strong>开发者信息</strong>
                <p>Name : Mamba</p>
                <p>Email : 462369233@qq.com</p>
                <p>博客地址 : <a href="http://blog.mambaxin.com" target="_blank">Mamba</a></p>

                <strong>小程序二维码</strong>
                <ul>
                    <li><image src="https://www.bmob.cn/uploads/attached/app/logo/20180613/bf08af14-ad87-39ac-afb4-4ae7eff0f0b1.jpg"></image></li>
              
                </ul>
                <strong>关于问题反馈</strong>
                <p>
                    可以发送Email,或者在Github上反馈遇到的问题,看到后会逐一帮助解决问题，务必将问题描述清楚。
                </p>
            </div>
        </div>
    </div>
@endsection
