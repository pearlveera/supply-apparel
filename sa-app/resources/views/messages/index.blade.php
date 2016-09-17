@extends('layouts.app')

@section('content')

<main class="boutique_messages">
    <section class="section_1 owner_menu">
       @include('layouts.seller_navigation')
    </section>
    <section class="section_2">
        <div class="container">
            <div class="row">
                <div class="chat_block">
                    <div class="contact_list">
                        <div class="search_block">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="search_icon"></i></div>
                                <input type="text" class="form-control" placeholder="Search" name="q">
                            </div>
                        </div>
                        <div class="contacts">
                            <!-- if user has messages add attribute data-count on user_photo with number of messages -->
                            <div class="item online notifications">
                                <div class="user_photo" data-count="99"></div>
                                <div class="user_name">Keith Cameron</div>
                                <div class="notifications_block">
                                    <div>2</div>
                                </div>
                            </div>
                            <div class="item online active">
                                <div class="user_photo"></div>
                                <div class="user_name">Alice Jackson</div>
                                <div class="notifications_block">
                                    <div>2</div>
                                </div>
                            </div>
                            <div class="item away">
                                <div class="user_photo"></div>
                                <div class="user_name">Owen Davies</div>
                                <div class="notifications_block">
                                    <div>2</div>
                                </div>
                            </div>
                            <div class="item away">
                                <div class="user_photo"></div>
                                <div class="user_name">Owen Davies</div>
                                <div class="notifications_block">
                                    <div>2</div>
                                </div>
                            </div>
                            <div class="item online">
                                <div class="user_photo"></div>
                                <div class="user_name">Owen Davids</div>
                                <div class="notifications_block">
                                    <div>2</div>
                                </div>
                            </div>
                            <div class="item disturb">
                                <div class="user_photo"></div>
                                <div class="user_name">Samantha Terry</div>
                                <div class="notifications_block">
                                    <div>2</div>
                                </div>
                            </div>
                            <div class="item disturb">
                                <div class="user_photo"></div>
                                <div class="user_name">Samantha Terry</div>
                                <div class="notifications_block">
                                    <div>2</div>
                                </div>
                            </div>
                            <div class="item online">
                                <div class="user_photo"></div>
                                <div class="user_name">Owen Davids</div>
                                <div class="notifications_block">
                                    <div>2</div>
                                </div>
                            </div>
                            <div class="item online">
                                <div class="user_photo"></div>
                                <div class="user_name">Keith Cameron</div>
                                <div class="notifications_block">
                                    <div>2</div>
                                </div>
                            </div>
                            <div class="item online">
                                <div class="user_photo"></div>
                                <div class="user_name">Keith Cameron</div>
                                <div class="notifications_block">
                                    <div>2</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="expand_menu"><i class="fa fa-chevron-left"></i></div>
                    <div class="chat_container">
                        <!-- if not opened any chat, add class empty  and delete chat_text block -->
                        <div class="supply"></div>
                        <div class="chat_text">
                            <div class="item">
                                <div class="user_photo"></div>
                                <div class="text_block">
                                    <div class="name">Alice Jackson</div>
                                    <div class="type">
                                        <p>Lorem ipsum dolor sit amet, consectetur adiscing elit.</p>
                                        <p>Duis Blandit folor vitae odio commodo, eu semper diam porta. Vivamus no dolor
                                            nec ligula placerat viverra. Fusce quies dolor ac odio ultrices fermentum.
                                            Suspendisse risus mauris, tempos pellentesque gravida sit amet. placerat ac
                                            neque</p>
                                    </div>
                                </div>
                                <div class="time_block">
                                    14:25
                                </div>
                            </div>
                            <div class="item me">
                                <div class="user_photo"></div>
                                <div class="text_block">
                                    <div class="name">Ryan Almeida</div>
                                    <div class="type">
                                        <p>Lorem ipsum dolor sit amet, consectetur adiscing elit.Vivamus commodo auctor
                                            arcu nec fermentum. Mauris scelerisque arcu libero, tristique tempus lectus
                                            pelle</p>
                                    </div>
                                </div>
                                <div class="time_block">14:27</div>
                            </div>
                            <div class="item  with_upload">
                                <div class="user_photo"></div>
                                <div class="text_block">
                                    <div class="name">Alice Jackson</div>
                                    <div class="action">Sending file...</div>
                                    <div class="type">
                                        <div class="file_type"></div>
                                        <div class="file_upload">
                                            <div class="name">filename.zip</div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                </div>
                                            </div>
                                            <button type="button" class="close" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                            <div class="result">72% Complete 576 of 800 MB transfered</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="time_block">14:27</div>
                            </div>
                            <div class="item  with_upload">
                                <div class="user_photo"></div>
                                <div class="text_block">
                                    <div class="name">Alice Jackson</div>
                                    <div class="action">Sending file...</div>
                                    <div class="type">
                                        <div class="file_type"></div>
                                        <div class="file_upload">
                                            <div class="name">filename.zip</div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                </div>
                                            </div>
                                            <button type="button" class="close" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                            <div class="result">72% Complete 576 of 800 MB transfered</div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adiscing elit.</p>
                                        <p>Duis Blandit folor vitae odio commodo, eu semper diam porta. Vivamus no dolor
                                            nec ligula placerat viverra. Fusce quies dolor ac odio ultrices fermentum.
                                            Suspendisse risus mauris, tempos pellentesque gravida sit amet. placerat ac
                                            neque</p>
                                    </div>
                                </div>
                                <div class="time_block">14:27</div>
                            </div>
                            <div class="item  upload_sent">
                                <div class="user_photo"></div>
                                <div class="text_block">
                                    <div class="name">Alice Jackson</div>
                                    <div class="action">File sent</div>
                                    <a href="#">
                                        <div class="type">
                                            <div class="file_type"></div>
                                            <div class="file_upload">
                                                <div class="name">filename.zip</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="time_block">14:27</div>
                            </div>
                            <div class="item  upload_accept">
                                <div class="user_photo"></div>
                                <div class="text_block">
                                    <div class="name">Alice Jackson</div>
                                    <div class="action">Sending file...</div>
                                    <div class="type">
                                        <div class="file_type"></div>
                                        <div class="file_upload">
                                            <div class="name">filename.zip</div>
                                            <a href="#">Accept</a>
                                            <a href="#">Reject</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="time_block">14:27</div>
                            </div>
                        </div>
                        <div class="send_block">
                            <div class="input-group">
                                <textarea class="form-control" placeholder="Type a message here" maxlength="2000"
                                          name="send"></textarea>
                                <input hidden type="file" name="file" id="file"/>
                                <label for="file" title="Upload files"><i></i></label>
                            </div>
                            <button type="submit" title="Send" class="btn_send"><i></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@stop