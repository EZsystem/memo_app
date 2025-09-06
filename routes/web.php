<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;



// 一覧ページ
Volt::route('/', 'memos.index')->name('memos.index');
// 具体的なパスを先に設定
// 新規作成ページ
Volt::route('/memos/create', 'memos.create')->name('memos.create');
// 同出来なパラメータを含むルートは最後に設定
// 詳細ページ
Volt::route('/memos/{memo}', 'memos.show')->name('memos.show');
// 編集ページ
Volt::route('/memos/{memo}/edit', 'memos.edit')->name('memos.edit');
