<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="LifeVitae">
    <meta name="keywords" content="LifeVitae">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="fb:app_id" content="316966722562291">
    <meta prefix="og: http://ogp.me/ns#" property="og:type" content="website">
    <meta prefix="og: http://ogp.me/ns#" property="og:image" content="https://lifevitaelive.com/users-strength/3282-strength.png">
    <meta prefix="og: http://ogp.me/ns#" property="og:image:url" content="https://lifevitaelive.com/users-strength/3282-strength.png">
    <meta prefix="og: http://ogp.me/ns#" property="og:image:alt" content="https://lifevitaelive.com/users-strength/3282-strength.png">
    <meta prefix="og: http://ogp.me/ns#" property="og:image:width" content="200">
    <meta prefix="og: http://ogp.me/ns#" property="og:image:height" content="200">
    <meta prefix="og: http://ogp.me/ns#" property="og:type" content="website">
    <title>Life Vitae</title>
    <link rel="shortcut icon" type="image/png" href="https://lifevitaelive.com/assets/img/elva-pic.png">
    <!-- Font Awesome Icons -->
    <link href="https://lifevitaelive.com/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Theme CSS - Includes Bootstrap -->
    <link href="https://lifevitaelive.com/assets/css/creative.css" rel="stylesheet">
    <link href="https://lifevitaelive.com/assets/css/creative-thinkplace.css" rel="stylesheet">
    <link href="https://lifevitaelive.com/assets/css/safari.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <link href="https://lifevitaelive.com/assets/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://lifevitaelive.com/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelementplayer.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/css/playlist.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/css/icon.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/css/icon.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/css/thinkplace/bootstrap-tour-standalone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/thinkplace_assets/css/thinkplace.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/thinkplace_assets/css/thinkplace_1.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/thinkplace_assets/css/stylised.css">
    <style>
        .welcome_four_box {
            margin-top: 15px;
            min-height: 330px;
        }

        @media (max-width: 600px) {
          .footer-link-new {
              display: block;
          }

          .footer-link-new li a {
              display: block;
              text-align: center;
              margin: 5px;
          }

        }

        @media (max-width: 1100px) {
            .timeline-content {
                padding-left: 10px;
                padding-right: 5px;
            }
            .timeline-content p{
                font-size: 12px;
            }
        }

        @media (max-width: 1249px) {
            #desktop_progress_bar input::after {
                right: calc(-7vw + 12.5px) !important;
            }

        }
        .hexa_strength {
            width: 21px;
            height: 21px;
            display: inline-block;
            background: url(https://lifevitaelive.com/assets/skins1/grey_hexa_shape.png);
            background-position-y: 3px;
            margin-right: 5px;
        }
        .hex p {
          padding: 0 8px;
        }
        #congo_tasks li{
          list-style: none;
        }

        #congo_tasks li i{
          color: #40C4C1;
          font-size: 20px;
        }

        #congo_tasks li span {
            margin-left: 10px;
            font-size: 15px;
        }

        #popup_main_video video {
            width: 800px;
            margin-bottom: 0px;
            margin-top: 0px;
            background: #F5F3F0;
        }

        .stylised-play, .stylised-pause {
            width: 166px;
            height: 72PX;
            background-color: #F7B932;
            position: absolute;
            left: 0;
            text-align: center;
            padding-top: 24px;
            padding-left: 20px;
            cursor: pointer;
        }

        .fa-pencil{
          margin: 0 5px;
        }
        .fa-trash{
          margin: 0 5px;
        }

        [data-tooltip]:before, [data-tooltip]:after {
            position: absolute;
            visibility: hidden;
            opacity: 0;
            left: 50%;
            bottom: calc(100% + 5px);
            pointer-events: none;
            transition: 0.2s;
            will-change: transform;
        }

        [data-tooltip-location="left"]:before, [data-tooltip-location="left"]:after {
            left: auto;
            right: calc(100% + 5px);
            bottom: 50%;
        }

        [data-tooltip-location="right"]:before, [data-tooltip-location="right"]:after {
            left: calc(100% + -0px);
            bottom: 50%;
        }

        [data-tooltip-location="bottom"]:before, [data-tooltip-location="bottom"]:after {
            top: calc(100% + 15px);
            left: 50%;
            bottom: 50%;
            min-height: 170px;
        }

        [data-tooltip-location="bottom"]:after {
            border-width: 0px 5px 5px 5px !important;
        }
        .save_pdf_form_class_edit .form-group{
          margin-bottom: 0;
        }

        .save_pdf_form_class_edit ul{
          margin-bottom: 0;
        }

        .lifeline_edit_delete{
          display: none;
        }
        .lifepassion_edit_delete{
          display: none;
        }
        .lifeachievement_edit_delete{
          display: none;
        }
        #chartjs-radar {
            width: 80%;
            height: auto;
            margin: 20px auto;
        }

        .connection_view_more {
            margin-top: 0.5rem;
            color: #fff;
            background-color: #40C4C1;
            text-decoration: none;
            text-align: center;
        }
    </style>
    <title>Life Vitae</title>
    <link rel="shortcut icon" type="image/png" href="https://lifevitaelive.com/assets/img/elva-pic.png">
    <!-- Font Awesome Icons -->
    <link href="https://lifevitaelive.com/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Theme CSS - Includes Bootstrap -->
    <link href="https://lifevitaelive.com/assets/css/creative.css" rel="stylesheet">
    <link href="https://lifevitaelive.com/assets/css/creative-thinkplace.css" rel="stylesheet">
    <link href="https://lifevitaelive.com/assets/css/safari.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <link href="https://lifevitaelive.com/assets/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://lifevitaelive.com/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelementplayer.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/css/playlist.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/css/icon.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/css/icon.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/css/thinkplace/bootstrap-tour-standalone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/thinkplace_assets/css/thinkplace.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/thinkplace_assets/css/thinkplace_1.css">
    <link rel="stylesheet" href="https://lifevitaelive.com/assets/thinkplace_assets/css/stylised.css">
    <style>
        .welcome_four_box {
            margin-top: 15px;
            min-height: 330px;
        }
        #drop {
                min-height: 150px;
                width: 250px;
                border: 1px solid blue;
                margin: 10px;
                padding: 10px;
            }
        @media (max-width: 600px) {
          .footer-link-new {
              display: block;
          }

          .footer-link-new li a {
              display: block;
              text-align: center;
              margin: 5px;
          }

        }

        @media (max-width: 1100px) {
            .timeline-content {
                padding-left: 10px;
                padding-right: 5px;
            }
            .timeline-content p{
                font-size: 12px;
            }
        }

        @media (max-width: 1249px) {
            #desktop_progress_bar input::after {
                right: calc(-7vw + 12.5px) !important;
            }

        }

        .hex p {
          padding: 0 8px;
        }
        #congo_tasks li{
          list-style: none;
        }

        #congo_tasks li i{
          color: #40C4C1;
          font-size: 20px;
        }

        #congo_tasks li span {
            margin-left: 10px;
            font-size: 15px;
        }

        #popup_main_video video {
            width: 800px;
            margin-bottom: 0px;
            margin-top: 0px;
            background: #F5F3F0;
        }

        .stylised-play, .stylised-pause {
            width: 166px;
            height: 72PX;
            background-color: #F7B932;
            position: absolute;
            left: 0;
            text-align: center;
            padding-top: 24px;
            padding-left: 20px;
            cursor: pointer;
        }

        .fa-pencil{
          margin: 0 5px;
        }
        .fa-trash{
          margin: 0 5px;
        }

        [data-tooltip]:before, [data-tooltip]:after {
            position: absolute;
            visibility: hidden;
            opacity: 0;
            left: 50%;
            bottom: calc(100% + 5px);
            pointer-events: none;
            transition: 0.2s;
            will-change: transform;
        }

        [data-tooltip-location="left"]:before, [data-tooltip-location="left"]:after {
            left: auto;
            right: calc(100% + 5px);
            bottom: 50%;
        }

        [data-tooltip-location="right"]:before, [data-tooltip-location="right"]:after {
            left: calc(100% + -0px);
            bottom: 50%;
        }

        [data-tooltip-location="bottom"]:before, [data-tooltip-location="bottom"]:after {
            top: calc(100% + 15px);
            left: 50%;
            bottom: 50%;
            min-height: 170px;
        }

        [data-tooltip-location="bottom"]:after {
            border-width: 0px 5px 5px 5px !important;
        }
        .save_pdf_form_class_edit .form-group{
          margin-bottom: 0;
        }

        .save_pdf_form_class_edit ul{
          margin-bottom: 0;
        }

        .lifeline_edit_delete{
          display: none;
        }
        .lifepassion_edit_delete{
          display: none;
        }
        .lifeachievement_edit_delete{
          display: none;
        }
        #chartjs-radar {
            width: 80%;
            height: auto;
            margin: 20px auto;
        }

        .connection_view_more {
            margin-top: 0.5rem;
            color: #fff;
            background-color: #40C4C1;
            text-decoration: none;
            text-align: center;
        }
asks_checklist li span {
            font-size: 15px;
        }

        .timeline-content p {
            font-size: 15px;
        }

        .connections_list_profile p {
            margin-bottom: 1px;
            font-size: 15px;
        }

        .connections_list_profile a {
            color: #717171;
            font-weight: bold;
            font-size: 15px;
        }

        #profile_progress_info p{
          font-size: 15px;
        }

        #profile_progress_info li{
          font-size: 15px;
        }

        .life-moments .life-moment__question-text {
            overflow: hidden;
            color: #373A3C;
            font-size: 13px;
            font-weight: bold;
        }

        .app-textarea__wrap textarea {
            margin-top: 15px;
            height: 130px;
            font-size: 13px;
            line-height: 20px;
        }

        .life-moments {
            border-radius: 10px;
            background-color: #fff;
            color: #666;
            padding: 0px 20px 20px 20px;
            margin-bottom: 5px;
            cursor: pointer;
        }
        @media (min-width: 576px){
            #save_pdf_popup .modal-dialog {
                max-width: 1000px;
                margin: 1.75rem auto;
            }

            #lifepivot .modal-dialog {
                max-width: 1000px;
                margin: 1.75rem auto;
            }

            #add_pivot_description_popup .modal-dialog {
                max-width: 800px;
                margin: 1.75rem auto;
            }

            #subject_combination_popup .modal-dialog {
                max-width: 800px;
                margin: 1.75rem auto;
            }

            #video_popup .modal-dialog {
                max-width: 800px;
                margin: 1.75rem auto;
            }

            #video_popup_view .modal-dialog {
                max-width: 800px;
                margin: 1.75rem auto;
            }

            #welcome_popup .modal-dialog {
                max-width: 1000px;
                margin: 1.75rem auto;
            }

            .welcome_popup .modal-dialog {
                max-width: 1000px;
                margin: 1.75rem auto;
            }

            #hints-achievements-data .modal-dialog {
                max-width: 800px;
                margin: 1.75rem auto;
            }

            #hints-achievements-data-extra .modal-dialog {
                max-width: 800px;
                margin: 1.75rem auto;
            }

            #life_achievements_modal .modal-dialog {
                max-width: 1200px;
                margin: 1.75rem auto;
            }

            #life_achievements_modal_edit .modal-dialog {
                max-width: 1200px;
                margin: 1.75rem auto;
            }

            #life_passion_modal .modal-dialog {
                max-width: 1200px;
                margin: 1.75rem auto;
            }

            #life_passion_modal_edit .modal-dialog {
                max-width: 1200px;
                margin: 1.75rem auto;
            }

            #life_strengths_modal .modal-dialog {
                max-width: 1200px;
                margin: 1.75rem auto;
            }

            #life_moment_modal .modal-dialog {
                max-width: 1200px;
                margin: 1.75rem auto;
            }

            #life_line_modal .modal-dialog{
                max-width: 800px;
                margin: 1.75rem auto;
            }

            #life_line_modal_edit .modal-dialog{
                max-width: 800px;
                margin: 1.75rem auto;
            }
        }
        .navbar-collapse.collapse.show{
          display: block;
        }
        .hex p {
            width: 75% !important;
            margin: 0;
            padding: 0 6px;
            position: relative;
            box-sizing: border-box;
            font-weight: 600;
            letter-spacing: 0px;
            color: #fff;
            font-size: 9px !important;
            text-transform: unset !important;
            max-height: 80px;
            overflow: hidden;
        }
        .hex p.strength_descr{
          font-size: 8px !important;
          line-height: 10px;
        }
        .life-moments .del {
            display: inline-block;
        }
        .welcome_four_box {
            margin-top: 15px;
            min-height: 330px;
        }
        .save_add_another {
            margin-top: 5px;
            margin-bottom: 5px;
            background: #fff;
        }
        .save_add_publish {
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .private_angle_down i {
            margin-left: 10px;
        }
        .choose_privacy {
            width: 250px;
            padding: 0;
            font-size: 14px;
        }
        .private_angle_down {
            width: 300px;
            cursor: pointer;
            font-size: 15px;
            padding: 10px;
        }
        [data-tooltip-location="right"]:before, [data-tooltip-location="right"]:after {
            left: calc(100% + -0px);
            bottom: 50%;
        }

        [data-tooltip-location="right"]:after{
          display: none;
        }
        #profile_progress_info {
            margin-bottom: 20px;
        }
        .connection_view_more:hover {
            background: rgba(64,196,193,0.1);
            color: #40C4C1;
            text-decoration: none;
        }
        .timeline-info {
            padding-right: 10px;
        }
        .onhover_book:hover{
          text-decoration: none;
        }
        a:hover {
          color: #d6370c;
          text-decoration: none;
      }
      [data-tooltip]:before {
          max-width: 200px;
      }
      .res_book_img_cover{
        width:100%; border: 1px solid #858b90;  border-radius: 5px; max-height: 150px;
      }
      .res_book_img_cover img{
        max-height: 148px;
      }
      .res_book_img_cover_details{
        margin: 0 1rem 0 0rem;
      }
      #strength-h-Grid-popup .strength-h- img {
          width: 31px;
          margin-top: 25px;
      }
      .lifestrength-pop-grid{
        margin: 2rem 5rem;
      }
      .life-strengths-check label {
          word-break: break-word;
          padding: 5px 10px;
          background: #fff;
          display: flex;
          align-items: center;
          justify-content: center;
          box-shadow: 0px 0px 6px -3px black;
          border-radius: 0;
          margin-bottom: 7px;
          line-height: 1.5;
          font-weight: 400;
          top: 0;
          left: 0;
          font-size: .85rem;
          width: 90%;
          height: 100%;
          overflow: hidden;
          text-align: center;
          -webkit-clip-path: url(#polygon-clip-hexagon);
          clip-path: url(#polygon-clip-hexagon);
          -webkit-clip-path: polygon(40% 7.67949%, 43.1596% 6.20615%, 46.52704% 5.30384%, 50% 5%, 53.47296% 5.30384%, 56.8404% 6.20615%, 60% 7.67949%, 81.65064% 20.17949%, 84.50639% 22.17911%, 86.97152% 24.64425%, 88.97114% 27.5%, 90.44449% 30.6596%, 91.34679% 34.02704%, 91.65064% 37.5%, 91.65064% 62.5%, 91.34679% 65.97296%, 90.44449% 69.3404%, 88.97114% 72.5%, 86.97152% 75.35575%, 84.50639% 77.82089%, 81.65064% 79.82051%, 60% 92.32051%, 56.8404% 93.79385%, 53.47296% 94.69616%, 50% 95%, 46.52704% 94.69616%, 43.1596% 93.79385%, 40% 92.32051%, 18.34936% 79.82051%, 15.49361% 77.82089%, 13.02848% 75.35575%, 11.02886% 72.5%, 9.55551% 69.3404%, 8.65321% 65.97296%, 8.34936% 62.5%, 8.34936% 37.5%, 8.65321% 34.02704%, 9.55551% 30.6596%, 11.02886% 27.5%, 13.02848% 24.64425%, 15.49361% 22.17911%, 18.34936% 20.17949%);
          clip-path: polygon(40% 7.67949%, 43.1596% 6.20615%, 46.52704% 5.30384%, 50% 5%, 53.47296% 5.30384%, 56.8404% 6.20615%, 60% 7.67949%, 81.65064% 20.17949%, 84.50639% 22.17911%, 86.97152% 24.64425%, 88.97114% 27.5%, 90.44449% 30.6596%, 91.34679% 34.02704%, 91.65064% 37.5%, 91.65064% 62.5%, 91.34679% 65.97296%, 90.44449% 69.3404%, 88.97114% 72.5%, 86.97152% 75.35575%, 84.50639% 77.82089%, 81.65064% 79.82051%, 60% 92.32051%, 56.8404% 93.79385%, 53.47296% 94.69616%, 50% 95%, 46.52704% 94.69616%, 43.1596% 93.79385%, 40% 92.32051%, 18.34936% 79.82051%, 15.49361% 77.82089%, 13.02848% 75.35575%, 11.02886% 72.5%, 9.55551% 69.3404%, 8.65321% 65.97296%, 8.34936% 62.5%, 8.34936% 37.5%, 8.65321% 34.02704%, 9.55551% 30.6596%, 11.02886% 27.5%, 13.02848% 24.64425%, 15.49361% 22.17911%, 18.34936% 20.17949%);
      }
      .Polygon_62_nddd {
          overflow: hidden;
          width: 15.75px;
          height: 14px;
          transform: translate(-20px, -204.013px) matrix(1,0,0,1,19.125,204.8882) rotate(90deg);
          transform-origin: center;
          margin-top: -3px;
          margin-left: 5px;
      }
      .passion_stregnth {
          margin: 10px 0;
          font-size: 14px;
          line-height: 15px;
      }
      [data-tooltip]:after {
          content: '';
          border-style: solid;
          border-width: 5px 5px 0px 5px;
          border-color: #40C4C1 transparent transparent transparent;
          transition-duration: 0s;
          transform-origin: top;
          transform: translateX(-50%) scaleY(0);
      }
      #only_mobile_display_task{
        display: none;
      }
      .only_desktop_display_task{
        display: block;
      }
      .hex img {
          width: 38px;
      }
      @media (max-width: 1368px) {
        .hex p {
            width: 75% !important;
            margin: 0;
            padding: 0 6px;
            position: relative;
            box-sizing: border-box;
            font-weight: inherit;
            letter-spacing: 1px;
            color: #fff;
            font-size: 9px !important;
            text-transform: unset !important;
            max-height: 80px;
            overflow: hidden;
        }
        .hex p.strength_descr{
          font-size: 8px !important;
        }
        .hex img {
            width: 24px;
            position: relative;
            margin-bottom: 10px;
            transition: all 0.3s linear;
        }
      }
      @media (max-width: 986px) {
          #only_mobile_display_task{
            display: block;
          }

          .only_desktop_display_task{
            display: none;
          }

          .col-lg-60 {
              width: 100%;
              float: none;
          }
          .life-moments .life-moment__question {
              height: auto;
          }
          .save_add_another {
              font-size: 16px;
          }
          .save_add_publish {
              font-size: 16px;
          }

          .res_book_img_cover{
            width:70%; border: 1px solid #858b90;  border-radius: 5px; height: auto; margin: 0 auto; max-height: none;
          }

          .res_book_img_cover img{
            max-height: none;
          }

          .res_book_img_cover_details{
            margin: 0 1rem 0 2rem;
          }

          .res_book_img_cover_description{
            width:70%; height: auto; margin: 1rem auto;;
          }

          #years_old {
              text-align: center;
          }

          #icon_ionic_ios_time {
              float: none;
              margin: 5px auto;
              width: 15px;
          }

          .icon_ionic_ios_time_img{
            width: 15px;
            margin: 0 auto;
          }
      }

      @media (max-width: 986px) {
          #strength-h-Grid{
            padding-bottom: 11.2%
          }
          .strength-h- {
            width: 42%;
          }
          .strength-h-:nth-child(3n+3){
            /*margin-left:25%; */
          }

          .extra_menu_hide ul li{
            margin-left: 8px;
          }

          .life-strengths-check label {
            font-size: .70rem;
          }

          .lifestrength-pop-grid{
            margin: 2rem 1rem;
          }

          .passion_title {
              margin: 30px 0 20px 0;
          }

    }

    .timeline {
        display: block;
        width: 90%;
    }

    .timeline-item {
        display: block;
        padding: 0;
    }


    .strength-h-Inn {
        position: absolute;
        width: 110%;
        padding-bottom: 110%;
        margin: 0;
        visibility: hidden;
        outline: 1px solid transparent;
        transition: transform 0.6s;
    }

    .strength-h-Inn * {
        position: absolute;
        visibility: visible;
        outline: 1px solid transparent;
    }

    .life-strength-checkk {
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
    }

    .life-strengths-checkk input[type=checkbox] {
        position: absolute;
        top: -0px;
        left: -0px;
        z-index: -10;
    }

    .cognitive-checkk .life-strengths-checkk label {
        color: black;
        background: #ece2e2;
    }

    .life-strengths-checkk label {
          word-break: break-word;
          padding: 5px 10px;
          background: #fff;
          display: flex;
          align-items: center;
          justify-content: center;
          box-shadow: 0px 0px 6px -3px black;
          border-radius: 0;
          margin-bottom: 7px;
          line-height: 1.5;
          font-weight: 400;
          top: 0;
          left: 0;
          font-size: .85rem;
          width: 90%;
          height: 100%;
          overflow: hidden;
          text-align: center;
          -webkit-clip-path: url(#polygon-clip-hexagon);
          clip-path: url(#polygon-clip-hexagon);
          -webkit-clip-path: polygon(40% 7.67949%, 43.1596% 6.20615%, 46.52704% 5.30384%, 50% 5%, 53.47296% 5.30384%, 56.8404% 6.20615%, 60% 7.67949%, 81.65064% 20.17949%, 84.50639% 22.17911%, 86.97152% 24.64425%, 88.97114% 27.5%, 90.44449% 30.6596%, 91.34679% 34.02704%, 91.65064% 37.5%, 91.65064% 62.5%, 91.34679% 65.97296%, 90.44449% 69.3404%, 88.97114% 72.5%, 86.97152% 75.35575%, 84.50639% 77.82089%, 81.65064% 79.82051%, 60% 92.32051%, 56.8404% 93.79385%, 53.47296% 94.69616%, 50% 95%, 46.52704% 94.69616%, 43.1596% 93.79385%, 40% 92.32051%, 18.34936% 79.82051%, 15.49361% 77.82089%, 13.02848% 75.35575%, 11.02886% 72.5%, 9.55551% 69.3404%, 8.65321% 65.97296%, 8.34936% 62.5%, 8.34936% 37.5%, 8.65321% 34.02704%, 9.55551% 30.6596%, 11.02886% 27.5%, 13.02848% 24.64425%, 15.49361% 22.17911%, 18.34936% 20.17949%);
          clip-path: polygon(40% 7.67949%, 43.1596% 6.20615%, 46.52704% 5.30384%, 50% 5%, 53.47296% 5.30384%, 56.8404% 6.20615%, 60% 7.67949%, 81.65064% 20.17949%, 84.50639% 22.17911%, 86.97152% 24.64425%, 88.97114% 27.5%, 90.44449% 30.6596%, 91.34679% 34.02704%, 91.65064% 37.5%, 91.65064% 62.5%, 91.34679% 65.97296%, 90.44449% 69.3404%, 88.97114% 72.5%, 86.97152% 75.35575%, 84.50639% 77.82089%, 81.65064% 79.82051%, 60% 92.32051%, 56.8404% 93.79385%, 53.47296% 94.69616%, 50% 95%, 46.52704% 94.69616%, 43.1596% 93.79385%, 40% 92.32051%, 18.34936% 79.82051%, 15.49361% 77.82089%, 13.02848% 75.35575%, 11.02886% 72.5%, 9.55551% 69.3404%, 8.65321% 65.97296%, 8.34936% 62.5%, 8.34936% 37.5%, 8.65321% 34.02704%, 9.55551% 30.6596%, 11.02886% 27.5%, 13.02848% 24.64425%, 15.49361% 22.17911%, 18.34936% 20.17949%);
      }

      .life-strengths-check input[type=checkbox]:checked~label {
          color: #000;
          background: #ece2e2;
          text-transform: capitalize;
      }
      #profile_general {
    background: #f5fafe;
    padding: 30px 0;
    border-radius: 10px;
    margin-bottom: 20px;
}
    </style>
<script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/loader.js"></script>
<link id="load-css-0" rel="stylesheet" type="text/css" href="https://www.gstatic.com/charts/51/css/core/tooltip.css">
<link id="load-css-1" rel="stylesheet" type="text/css" href="https://www.gstatic.com/charts/51/css/util/util.css">
<script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/js/jsapi_compiled_default_module.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/js/jsapi_compiled_graphics_module.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/js/jsapi_compiled_ui_module.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/js/jsapi_compiled_geo_module.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/js/jsapi_compiled_geochart_module.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<style type="text/css">
@keyframes chartjs-render-animation {
	from { opacity: 0.99; }
	to { opacity: 1; }
}

.chartjs-render-monitor {
	animation: chartjs-render-animation 0.001s;
}
.chartjs-size-monitor,
.chartjs-size-monitor-expand,
.chartjs-size-monitor-shrink {
	position: absolute;
	direction: ltr;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	overflow: hidden;
	pointer-events: none;
	visibility: hidden;
	z-index: -1;
}

.chartjs-size-monitor-expand > div {
	position: absolute;
	width: 1000000px;
	height: 1000000px;
	left: 0;
	top: 0;
}

.chartjs-size-monitor-shrink > div {
	position: absolute;
	width: 200%;
	height: 200%;
	left: 0;
	top: 0;
}
</style>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/45/8b/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/45/8b/util.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        function myFunction()
        {
            @if(Session()->has('success'))
            {
                alert('{{Session::get('success')}}');
            }
            @endif
            @if(Session()->has('fail'))
            {
                alert('{{Session::get('fail')}}');
            }
            @endif
        }
        window.onload = myFunction();
    </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg inner-nav navbar-dark fixed-top py-3" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand " style="border-right: 2px solid white;padding-right: 1rem;" href="{{route('studentprofile')}}"><img src="https://lifevitaelive.com/assets/img/logo.svg"></a>
                <a class="navbar-brand " href="{{route('studentprofile')}}"><img src="https://lifevitaelive.com/assets/img/SRGS_Logo_Nav.png"></a>
                <div class="d-flex">
                    <div class="dropdown language-selector language-inmobile mt-1">
                        <li class="nav-item">
                                <a class="nav-link" href="{{route('studentlogout')}}">
                                    Log Out
                                </a>
                    </li>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="https://lifevitaelive.com/change_language/1">
                                <img src="https://lifevitaelive.com/storage/language/1553835183703211339.png">
                                <span id="js_language">Bahasa (Indonesia)</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="https://lifevitaelive.com/change_language/2">
                                <img src="https://lifevitaelive.com/storage/language/1563766670496179089.png">
                                <span id="js_language">English</span>
                            </a>
                        </li>
                                            <li>
                            <a href="https://lifevitaelive.com/change_language/3">
                                <img src="https://lifevitaelive.com/storage/language/15637747451956850765.png">
                                <span id="js_language">Hindi (हिंदी)</span>
                            </a>
                        </li>
                                            <li>
                            <a href="https://lifevitaelive.com/change_language/4">
                                <img src="https://lifevitaelive.com/storage/language/15637747451956850765.png">
                                <span id="js_language">Hinglish</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse in" id="navbarResponsive" style="" aria-expanded="true">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item extra_menu_hide" id="browse_search">
                        <a class="nav-link " href={{route('studentprofile')}}>My Profile</a>
                    </li>
                    <li class="nav-item extra_menu_hide" id="browse_search">
                        <a class="nav-link " href="https://lifevitaelive.com/school/srgs/resources">Resources</a>
                    </li>
                    <li class="dropdown nav-item extra_menu_hide">
                        <a class="nav-link" href="#" data-toggle="dropdown" data-close-others="true">
                            HOW-TO GUIDES
                        </a>
                    <ul class="dropdown-menu" style="background: #1f73b7; width: 200px; right: 0 !important; left: auto;">
                        <li class="nav-item extra_menu_hide" id="browse_search">
                            <a class="nav-link" target="_blank" href="https://lifevitaelive.com/sample/school/profile">Sample Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://lifevitaelive.com/school/srgs/change-tour">View Tour</a>
                        </li>
                    </ul>
                    </li>
                    <li class="dropdown nav-item extra_menu_hide">
                            <a class="nav-link" href="#" data-toggle="dropdown" data-close-others="true">
                                Opportunities
                            </a>
                    </li>
                    <li class="nav-item">
                                <a class="nav-link" href="{{route('studentlogout')}}">
                                    Log Out
                                </a>
                    </li>
                    <li class="dropdown nav-item extra_menu_hide">
                        <a href="#" data-toggle="dropdown" data-close-others="true" style="color:white;" aria-expanded="false">
                            <i class="nav-icon fa fa-cog fa-2x"></i>
                        </a>
                        <ul class="dropdown-menu" style="background: #1f73b7; width: 200px; right: 0 !important; left: auto;">
                            <li class="nav-item">
                                <a class="nav-link" href="https://lifevitaelive.com/change-password">Change Password</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="profile-details-section" style="padding-top: 7rem;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div id="profile_general">
                        <div class="profile-timeline-content" style="cursor: pointer;">
                        <div id="profile_section_game_live">
                            <style>
                                .hexagon_profile {
                                position: relative;
                                height: 180px;
                                width: 180px;
                                background: none;
                                }
                                #rectangle_182 {
                                    border-radius: 140px;
                                    border: 2px solid #40C4C1;
                                    background: #40C4C1;
                                    font-size: 14px;
                                    text-align: center;
                                    line-height: 22px;
                                    color: #ffffff;
                                }
                                .image_profile{
                                    background-position: center;
                                    background-size: 100% 100%;
                                }
                            </style>
                            <div class="profile-section" style="width: 180px;margin: 0 auto;">
                                <div class="hexagon_profile image_profile" id="rectangle_182"></div>
                            </div>
                        </div>
                        <div id="arvin_kumar">
                            {{$LoggedUserInfo->full_name}}
                            <span class="profile_edit"><a href={{route('showstudentdata')}}  style="color:black;"><i class="fa fa-pen"></i></a></span>
                        </div>
                        <style>
                            #years_old{
                                padding-right: 10px;
                            }
                            .profile-section .profile-avtar {
                                width: 180px;
                                height: 180px;
                            }
                        </style>
                        <div id="group_1525">
                            <div class="row">
                                <div class="col-lg-4"><div class="icon_ionic_ios_time_img"><img src="https://lifevitaelive.com/assets/skins1/general_icon_3.png" id="icon_ionic_ios_time"></div></div>
                                <div class="col-lg-8"><div id="years_old">
                                        16 years old
                                </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .text_center{
                            text-align: center;
                            }
                            .count_text_size{
                            font-size: 10px;
                            color: #707070;
                            text-align: center;
                            }
                        </style>
                        <div class="row">
                            <div class="col-lg-8">
                                <div style="width: 160px; margin: 0 auto;">
                                <div class="btn btn-info rounded-border mt-4 private_angle_down_new view_as_profile_click" data-id="3" style="background-color: #fff;border: 1px solid #3dbbb8;color: #3dbbb8; width: 160px;">
                                    Shareable Link
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="profile_timeline">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="heading-section">Co-ordinator Appointment <span data-tooltip="Book an appointment with your school co-ordinator whenever you are ready." data-tooltip-location="top"><i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i></span></p>
                            </div>
                        </div>
                        <div class="row" id="coordinate_srgs">
                        <div class="col-lg-1"></div>
                        <div class="col-sm-10">
                          <div class="profile-section" style="width: 180px;margin: 0 auto;">
                              <div class="hexagon_profile image_profile" id="rectangle_182"></div>
                          </div>
                          <br/>
                          <p style="text-align: center; font-weight: bold;">Irene Khosla</p>
                          <p style="text-align: center; font-size: 13px;"></p>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="row" style="margin: 1rem 2rem;" id="coordinate_update_section"></div>
                        <div style="padding-bottom: 5px;">
                            <div class="add_button" id="open_coordinate_modal"><i class="fa fa-plus" aria-hidden="true"></i> <span class="coordinate_modal_update">Book appointment</span></div>
                        </div>
                    </div>
                    <style>
                            .edit_delete_display{
                                display:block;
                            }
                            .edit_delete_display:hover{
                                display:block;
                            }
                    </style>
                    <div id="profile_timeline">
                        <div class="row">
                            <div class="col-lg-10">
                                <p class="heading-section">Life<b>Line</b> <span data-tooltip="Your LifeLine shows your LifeAchievements in chronological order. Have another significant life event or milestone you wish to highlight? You can add that directly to your LifeLine." data-tooltip-location="right"><i class="fa fa-question-circle heading-question-icon"></i></span></p>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row example-split" id="lifeline_timeline">
                            <div class="col-lg-12">
                                <ul class="timeline timeline-split" id="life_line_tour">
                                    @foreach($Lifeline as $event)
                                        <li class="timeline-item">
                                            <div class="timeline-info">
                                                <span>&nbsp;&nbsp;{{$event['standard']}}th STD</span>
                                            </div>
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <p style="margin-bottom: 0rem;">{{$event['life_event']}}
                                                    @if($event['school_approved']==1)<i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i>@endif
                                                </p>
                                                @if($event['school_approved']==0)
                                                    <p style="float: right; margin-bottom: 0;">
                                                        <a href={{"deletelifeline/".$event['id']}} onclick="return confirm('Are you sure you want to delete the Life Event?\nNote: Once Deleted the Data Cannot Be Retrieved. ')" style="text-decoration: none;color:black;">
                                                            <span class="lifeline_edit_delete edit_delete_display" data-id="6027">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </span>
                                                        </a>
                                                    </p>
                                                    <p style="float: right; margin-bottom: 0;">
                                                        <a onclick="lifelineedit({{$event['id']}})">
                                                            <span class="lifeline_edit edit_delete_display" data-id="{{$event['id']}}">
                                                                <i class="fa fa-pen" aria-hidden="true"></i>
                                                            </span>
                                                        </a>
                                                    </p>
                                                @endif
                                                <div style="clear: both;"></div>
                                            </div>
                                        </li>
                                    @endforeach
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span>&nbsp;&nbsp;8th STD</span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <p style="margin-bottom: 0rem;">It is a long established fact that a reader will be distracted by the readable content of a page when
                                                <i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i>
                                            </p>
                                            <div style="clear: both;"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div style="padding-bottom: 5px;">
                            <div class="add_button" id="open_life_line_modal" onclick="lifeline()">
                                 <i class="fa fa-plus" aria-hidden="true"></i> Add a Life<b>Event</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="profile_timeline">
                            <div class="row">
                                <div class="col-lg-6 col-xl-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="heading-section">Your Life<b>Powers</b> <span data-tooltip="LifePowers are six key dimensions that represent you as an individual. You can grow your LifePowers by adding additional information to your LifeVitae." data-tooltip-location="bottom"><i class="fa fa-question-circle heading-question-icon" aria-hidden="bottom"></i></span></p>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                    <div id="lifepower_tour">
                                        <div id="chartjs-radar" style="height: 100%; width: 90%;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                            <canvas id="canvas" style="display: block; width: 250px; height: 250px;" width="500" height="500" class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <p class="heading-section" style="margin-bottom: 30px;">Your Progress <span data-tooltip="Your school progress bar shows your current stage in school as updated by your school administrators." data-tooltip-location="right"><i class="fa fa-question-circle heading-question-icon" aria-hidden="bottom"></i></span></p>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                                    <style>
                                      h1 {
                                        text-align: center;
                                        height: 38px;
                                        margin: 60px 0;
                                      }
                                      h1 span {
                                        white-space: nowrap;
                                      }
                                      .flex-parent {
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: center;
                                        align-items: center;
                                        width: 100%;
                                        height: 100%;
                                      }
                                      .input-flex-container {
                                        display: flex;
                                        justify-content: space-around;
                                        align-items: center;
                                        flex-wrap: wrap;
                                        width: 80vw;
                                        max-width: 31rem;
                                        position: relative;
                                        z-index: 999;
                                        margin-left: calc((80vw - 25px) / 20);
                                      }
                                      input {
                                        width: 25px;
                                        height: 25px;
                                        position: relative;
                                        border-radius: 50%;
                                        display: block;
                                        -moz-appearance: none;
                                        -webkit-appearance: none;
                                        appearance: none;
                                        cursor: pointer;
                                      }
                                      input:focus {
                                        outline: none;
                                      }
                                      input::before, input::after {
                                        content: "";
                                        display: block;
                                        position: absolute;
                                        z-index: -1;
                                        top: 50%;
                                        transform: translateY(-50%);
                                        background-color: #2C3E50;
                                        width: 8vw;
                                        height: 5px;
                                        max-width: 75px;
                                      }
                                      input::before {
                                        left: calc(-4vw + 12.5px);
                                      }
                                      input::after {
                                        right: calc(-4vw + 12.5px);
                                      }
                                      input:checked {
                                        background-color: #2C3E50;
                                      }
                                      input:checked::before {
                                        background-color: #2C3E50;
                                      }
                                      input:checked::after {
                                        background-color: #AEB6BF;
                                      }
                                      input:checked ~ input, input:checked ~ input::before, input:checked ~ input::after {
                                        background-color: #AEB6BF;
                                      }
                                      input:checked + .dot-info span {
                                        font-size: 13px;
                                        font-weight: bold;
                                      }
                                      .dot-info {
                                        width: 25px;
                                        height: 25px;
                                        display: block;
                                        visibility: hidden;
                                        position: relative;
                                        z-index: -1;
                                        left: calc((((80vw - 25px) / 20) * -1) - 1px);
                                      }
                                      .dot-info span {
                                        visibility: visible;
                                        position: absolute;
                                        font-size: 11px;
                                      }
                                      .dot-info span.year {
                                        bottom: -30px;
                                        width: 100px;
                                        text-align: left;
                                        cursor: pointer;
                                      }
                                      .dot-info span.label {
                                        top: -20px;
                                        left: 0;
                                        width: 100px;
                                        text-indent: -10px;
                                      }
                                      #timeline-descriptions-wrapper {
                                        width: 100%;
                                        margin-top: 140px;
                                        font-size: 22px;
                                        font-weight: 400;
                                        margin-left: calc((-80vw - 25px) / 20);
                                      }
                                      #timeline-descriptions-wrapper p {
                                        margin-top: 0;
                                        display: none;
                                      }
                                      input[data-description="1910"]:checked ~ #timeline-descriptions-wrapper p[data-description="1910"] {
                                        display: block;
                                      }
                                      input[data-description="1920"]:checked ~ #timeline-descriptions-wrapper p[data-description="1920"] {
                                        display: block;
                                      }
                                      input[data-description="1930"]:checked ~ #timeline-descriptions-wrapper p[data-description="1930"] {
                                        display: block;
                                      }
                                      input[data-description="1940"]:checked ~ #timeline-descriptions-wrapper p[data-description="1940"] {
                                        display: block;
                                      }
                                      input[data-description="1950"]:checked ~ #timeline-descriptions-wrapper p[data-description="1950"] {
                                        display: block;
                                      }
                                      input[data-description="1960"]:checked ~ #timeline-descriptions-wrapper p[data-description="1960"] {
                                        display: block;
                                      }
                                      input[data-description="1970"]:checked ~ #timeline-descriptions-wrapper p[data-description="1970"] {
                                        display: block;
                                      }
                                      input[data-description="1980"]:checked ~ #timeline-descriptions-wrapper p[data-description="1980"] {
                                        display: block;
                                      }
                                      input[data-description="1990"]:checked ~ #timeline-descriptions-wrapper p[data-description="1990"] {
                                        display: block;
                                      }
                                      input[data-description="2000"]:checked ~ #timeline-descriptions-wrapper p[data-description="2000"] {
                                        display: block;
                                      }
                                      @media (min-width: 1250px) {
                                        .input-flex-container {
                                          margin-left: 0px;
                                        }
                                        input::before {
                                          left: -67.5px;
                                        }
                                        input::after {
                                          right: -50.5px;
                                        }
                                        .dot-info {
                                          left: calc((((1000px - 25px) / 20) * -1) - 1px);
                                        }
                                        #timeline-descriptions-wrapper {
                                          margin-left: -37.5px;
                                        }
                                      }
                                      @media (max-width: 630px) {
                                        .flex-parent {
                                          justify-content: initial;
                                        }
                                        .input-flex-container {
                                          flex-wrap: wrap;
                                          justify-content: center;
                                          width: 400px;
                                          height: auto;
                                          margin-top: 15vh;
                                          margin-left: 0;
                                        }
                                        .extracolor_progress{
                                          background-color: #2C3E50 !important;
                                        }
                                        .extracolor_progress_hide{
                                          display: none !important;
                                        }
                                        .progress_input, .dot-info {
                                          width: 60px;
                                          height: 60px;
                                          margin: 0 10px 30px;
                                        }
                                        input {
                                          background-color: transparent !important;
                                          z-index: 1;
                                        }
                                        input::before, input::after {
                                          content: none;
                                        }
                                        input:checked + .dot-info {
                                          background-color: #2C3E50;
                                        }
                                        input:checked + .dot-info span.year {
                                          font-size: 14px;
                                        }
                                        input:checked + .dot-info span.label {
                                          font-size: 12px;
                                        }
                                        .dot-info {
                                          visibility: visible;
                                          border-radius: 50%;
                                          z-index: 0;
                                          left: 0;
                                          margin-left: -20px;
                                          background-color: #AEB6BF;
                                        }
                                        .dot-info span.year {
                                          top: 0;
                                          left: 0;
                                          transform: none;
                                          width: 100%;
                                          height: 100%;
                                          display: flex;
                                          justify-content: center;
                                          align-items: center;
                                          color: #ECF0F1;
                                        }
                                        .dot-info span.label {
                                          top: calc(100% + 5px);
                                          left: 50%;
                                          transform: translateX(-50%);
                                          text-indent: 0;
                                          text-align: center;
                                        }
                                        #timeline-descriptions-wrapper {
                                          margin-top: 30px;
                                          margin-left: 0;
                                          text-align: center;
                                        }
                                      }
                                      .grey_class_timeline{
                                        width: 0px !important;
                                      }
                                      .extradotone{
                                      }
                                      @media (max-width: 480px) {
                                        .input-flex-container {
                                          width: 80%;
                                        }
                                      }
                                      @media (max-width: 400px) {
                                        .input-flex-container {
                                          width: 80%;
                                        }
                                      }
                                      .teal_bold_color{
                                        color: #40C4C1;
                                        font-weight: bold;
                                      }
                                      .purple_bold_color{
                                        color: #5A6A8E;
                                        font-weight: bold;
                                      }
                                      .bronze_bold_color{
                                        color: #854E4B;
                                        font-weight: bold;
                                      }
                                      .silver_bold_color{
                                        color: #4E6C70;
                                        font-weight: bold;
                                      }
                                      .gold_bold_color{
                                        color: #B0713D;
                                        font-weight: bold;
                                      }
                                      .platinum_bold_color{
                                        color: #9F904F;
                                        font-weight: bold;
                                      }
                                      .diamond_bold_color{
                                        color: #619ECA;
                                        font-weight: bold;
                                      }
                                      [data-tooltip-location="bottom"]:before, [data-tooltip-location="bottom"]:after {
                                            top: calc(100% + 15px);
                                            left: 50%;
                                            bottom: 50%;
                                            min-height: 160px;
                                        }

                                        [data-tooltip]:before {
                                            max-width: 200px;
                                        }
                                      </style>
                                <div id="progress_game_live_main">
                                    <div id="desktop_progress_bar">
                                        <div class="row">
                                        <div class="col-sm-12" style="margin-top: 50px;">
                                            <div class="flex-parent">
                                            <div class="input-flex-container">
                                                <input type="radio" style="width: 4px; height: 15px; background-color: #AEB6BF;" class="extradotone progress_input" name="timeline-dot" data-description="19304" disabled="" checked="">
                                                <div class="dot-info extracolor_progress" data-description="19304">
                                                <span class="year silver_bold_color">STD 9 T1</span>
                                                <span class="label">Current Level</span>
                                                </div>
                                                <input type="radio" name="timeline-dot" class="extracolor_progress_hide progress_input" data-description="19405" disabled="" checked="">
                                                <div class="dot-info extracolor_progress_hide" data-description="19405">
                                                <span class="year"></span>
                                                <span class="label"></span>
                                                </div>
                                                <input type="radio" style="width: 4px; height: 15px; background-color: #AEB6BF;" class="extradotone progress_input" name="timeline-dot" data-description="19506" disabled="">
                                                <div class="dot-info" data-description="19506">
                                                <span class="year gold_bold_color">STD 9 T2</span>
                                                <span class="label">Next Level</span>
                                                </div>
                                                <input type="radio" class="grey_class_timeline progress_input" name="timeline-dot" data-description="19101" disabled="">
                                                <div class="dot-info extracolor_progress" data-description="19101">
                                                <span class="year">STD 10 T1</span>
                                                <span class="label"></span>
                                                </div>
                                                <input type="radio" class="grey_class_timeline progress_input" name="timeline-dot" data-description="19102" disabled="">
                                                <div class="dot-info extracolor_progress" data-description="19102">
                                                <span class="year">STD 10 T2</span>
                                                <span class="label"></span>
                                                </div>
                                                <input type="radio" class="grey_class_timeline progress_input" name="timeline-dot" disabled="">
                                                <div class="dot-info extracolor_progress" data-description="19103">
                                                <span class="year">STD 11 T1</span>
                                                <span class="label"></span>
                                                </div>
                                                <input type="radio" class="grey_class_timeline progress_input" name="timeline-dot" data-description="19607" disabled="">
                                                <div class="dot-info" data-description="19607">
                                                <span class="year">STD 11 T2</span>
                                                <span class="label"></span>
                                                </div>
                                                <input type="radio" class="grey_class_timeline progress_input" name="timeline-dot" data-description="19708" disabled="">
                                                <div class="dot-info" data-description="19708">
                                                <span class="year" style="text-align: center;">STD 12 T1</span>
                                                <span class="label"></span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div id="mobile_progress_bar">
                                        <div class="col-12 align-self-baseline bd-example">
                                            <div class="d-flex flex-row">
                                            <div class="p-2"><p>Current Level</p></div>
                                            <div class="p-2"><p></p></div>
                                            <div class="p-2"><p>Next Level</p></div>
                                            <div class="p-2"><p></p></div>
                                            <div class="p-2"><p></p></div>
                                            <div class="p-2"><p></p></div>
                                            <div class="p-2"><p></p></div>
                                            <div class="p-2"><p></p></div>
                                            </div>
                                            <div class="d-flex flex-row">
                                            <div class="p-2">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="d-flex flex-row">
                                            <div class="p-2"><p>STD 9 T1</p></div>
                                            <div class="p-2"><p></p></div>
                                            <div class="p-2"><p>STD 9 T2</p></div>
                                            <div class="p-2"><p>STD 10 T1</p></div>
                                            <div class="p-2"><p>STD 10 T2</p></div>
                                            <div class="p-2"><p>STD 11 T1</p></div>
                                            <div class="p-2"><p>STD 11 T2</p></div>
                                            <div class="p-2"><p>STD 12 T1</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                #desktop_progress_bar [data-tooltip-location="bottom"]:before, #desktop_progress_bar [data-tooltip-location="bottom"]:after {
                                    top: calc(100% + 15px);
                                    left: 50%;
                                    bottom: 50%;
                                    min-height: 100px;
                                }
                                #final_diamond:checked::after {
                                background-color: #AEB6BF;
                                display: none;
                                }
                                .details-section{
                                    background: none;
                                }
                                #desktop_progress_bar{
                                display: block;
                                }
                                .progress {
                                    display: -ms-flexbox;
                                    display: flex;
                                    height: 1rem;
                                    overflow: hidden;
                                    font-size: .75rem;
                                    background-color: #99AFB9;
                                    border-radius: 0;
                                    width: 100%;
                                    border-right: 1px solid #fff;
                                }
                                .progress-bar {
                                    display: -ms-flexbox;
                                    display: flex;
                                    -ms-flex-direction: column;
                                    flex-direction: column;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    overflow: hidden;
                                    color: #fff;
                                    text-align: center;
                                    white-space: nowrap;
                                    background-color: #2C3E50 !important;
                                    background: #2C3E50 !important;
                                    transition: width .6s ease;
                                    border-radius: 0 !important;
                                    margin: 0 !important;
                                }
                                .bd-example>.alert+.alert, .bd-example>.nav+.nav, .bd-example>.navbar+.navbar, .bd-example>.progress+.btn, .bd-example>.progress+.progress {
                                    margin-top: 1rem;
                                }
                                .p-2{
                                    width: 4.3rem !important;
                                    margin: 0;
                                    padding: 0 !important;
                                }
                                .p-2 p{
                                    color: #33323f;
                                    text-align: center;
                                    font-size: 10px;
                                    margin-bottom: 10px;
                                    margin-top: 10px;
                                }
                                .p-absolute{
                                    position: absolute;
                                    top: -3px;
                                    left: 2.1rem;
                                }
                                .no-left{
                                    left: 0.5rem !important;
                                }
                                .p-relative{
                                    position: relative;
                                }

                                .bd-example{
                                display: none;
                                }
                                #mobile_progress_bar{
                                margin: 1rem 0;
                                display: none;
                                }
                                .achievements_icon {
                                    background: #ebebeb;
                                    color: #8d8d8d;
                                    position: absolute;
                                    top: -15px;
                                    right: 0px;
                                    padding: 5px 15px;
                                    border-radius: 0px 10px;
                                    font-size: 14px;
                                    line-height: 16px;
                                }
                                .passion_title {
                                    text-align: left;
                                    font-style: normal;
                                    font-weight: bold;
                                    font-size: 16px;
                                    color: rgba(55,58,60,1);
                                    margin: 5px 0;
                                    word-break: break-word;
                                    padding-top: 10px;
                                }
                                @media (max-width: 600px) {
                                    .bd-example{
                                    display: block;
                                    }
                                    .p-absolute{
                                        position: absolute;
                                        top: -3px;
                                        left: 1.1rem;
                                    }
                                    .no-left{
                                        left: 0.2rem !important;
                                    }
                                    #desktop_progress_bar{
                                    display: none;
                                    }
                                    #mobile_progress_bar{
                                    display: block;
                                    }
                                }
                            </style>
                            <style>
                                #profile_progress_info {
                                    border-radius: 10px;
                                    border: 2px dotted #5A6A8E;
                                    margin-top: 60px;
                                    margin-left: 20px;
                                    margin-right: 40px;
                                    padding: 30px;
                                }
                                .info_gold_text {
                                    color: #5A6A8E;
                                }
                            </style>
                            <div id="profile_progress_tour">
                                <div id="profile_progress_info">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Next Level: <b><span class="info_gold_text">9th Standard Term 2</span></b></p>
                                            <p class="info_gold_text">
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><b><span class="info_gold_text">'9th Standard Term 2'</span></b> unlocks:</p>
                                            <ul>
                                                <li>My Learning Paths</li>
                                                <li>Percentage scores on how you are tracking for each stream</li>
                                                <li>Recommendations on how to improve for each stream</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <img style="float: right; width: 50px;" src="https://lifevitaelive.com/assets/skins1/Purple.png" id="">
                                            <div style="clear: both;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div id="profile_timeline">
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="heading-section">Top Life<b>Strengths</b> <span data-tooltip="LifeStrengths are the strengths you have unlocked through the experiences you’ve shared on your profile. These are the human skills that you have showcased." data-tooltip-location="top"><i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i></span></p>
                            <div style="clear: both;"></div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                    <style>
                        .hexLink{
                            clip-path: none;
                        }
                        .hexLink-back{
                            clip-path: none;
                        }
                        .hexa_bg_Cognitive {
                            background: url(https://lifevitaelive.com/assets/thinkplace/Cognitive_hexa.png);
                            background-repeat: no-repeat;
                            background-size: contain;
                            background-position: center;
                            text-decoration: none;
                        }
                        .hexa_bg_Interactive {
                            background: url(https://lifevitaelive.com/assets/thinkplace/Interactive_hexa.png);
                            background-repeat: no-repeat;
                            background-size: contain;
                            background-position: center;
                            text-decoration: none;
                        }
                        .hexa_bg_Emotive {
                            background: url(https://lifevitaelive.com/assets/thinkplace/Emotive_hexa.png);
                            background-repeat: no-repeat;
                            background-size: contain;
                            background-position: center;
                            text-decoration: none;
                        }
                        .hexa_bg_Adaptive {
                            background: url(https://lifevitaelive.com/assets/thinkplace/Adaptive_hexa.png);
                            background-repeat: no-repeat;
                            background-size: contain;
                            background-position: center;
                            text-decoration: none;
                        }
                        .hexa_bg_Creative {
                            background: url(https://lifevitaelive.com/assets/thinkplace/Creative_hexa.png);
                            background-repeat: no-repeat;
                            background-size: contain;
                            background-position: center;
                            text-decoration: none;
                        }
                        .hexa_bg_Motive {
                            background: url(https://lifevitaelive.com/assets/thinkplace/Motive_hexa.png);
                            background-repeat: no-repeat;
                            background-size: contain;
                            background-position: center;
                            text-decoration: none;
                        }
                    </style>
                    <style>
                        #strength-h-Grid .life-strengths-check label{
                        clip-path: none;
                        }
                        .select_hexa_bg_Cognitive input[type=checkbox]:checked~label{
                        background: url(https://lifevitaelive.com/assets/thinkplace/Cognitive_hexa.png) !important;
                        background-repeat: no-repeat !important;
                        background-size: contain !important;
                        background-position: center !important;
                        text-decoration: none;
                        }
                        .select_hexa_bg_Interactive input[type=checkbox]:checked~label{
                        background: url(https://lifevitaelive.com/assets/thinkplace/Interactive_hexa.png) !important;
                        background-repeat: no-repeat !important;
                        background-size: contain !important;
                        background-position: center !important;
                        text-decoration: none;
                        }
                        .select_hexa_bg_Emotive input[type=checkbox]:checked~label{
                        background: url(https://lifevitaelive.com/assets/thinkplace/Emotive_hexa.png) !important;
                        background-repeat: no-repeat !important;
                        background-size: contain !important;
                        background-position: center !important;
                        text-decoration: none;
                        }
                        .select_hexa_bg_Adaptive input[type=checkbox]:checked~label{
                        background: url(https://lifevitaelive.com/assets/thinkplace/Adaptive_hexa.png) !important;
                        background-repeat: no-repeat !important;
                        background-size: contain !important;
                        background-position: center !important;
                        text-decoration: none;
                        }
                        .select_hexa_bg_Creative input[type=checkbox]:checked~label{
                        background: url(https://lifevitaelive.com/assets/thinkplace/Creative_hexa.png) !important;
                        background-repeat: no-repeat !important;
                        background-size: contain !important;
                        background-position: center !important;
                        text-decoration: none;
                        }
                        .select_hexa_bg_Motive input[type=checkbox]:checked~label{
                        background: url(https://lifevitaelive.com/assets/thinkplace/Motive_hexa.png) !important;
                        background-repeat: no-repeat !important;
                        background-size: contain !important;
                        background-position: center !important;
                        text-decoration: none;
                        }

                        #strength-h-Grid .life-strength-check label{
                        background: url(https://lifevitaelive.com/assets/thinkplace/Default_hexa.png);
                        background-repeat: no-repeat;
                        background-size: contain;
                        background-position: center;
                        text-decoration: none;
                        box-shadow: none;
                        }
                    </style>
                    <div id="life_strengths_tour">
                        <ul id="hexGrid">
                            @foreach($Strengths as $strength)
                                <?php $url=0;
                                    $desc=0; $cat=0; ?>
                                <?php
                                        foreach($Strengthslist as $stndesc)
                                        {
                                            if($stndesc['achievements_strength']==$strength['strengths'])
                                            {
                                                $desc=$stndesc['description'];
                                                $url=$stndesc['image'];
                                                $cat=$stndesc['strength_category'];
                                            }
                                         }
                                ?>
                                <li class="hex-list">
                                    <div class="hex">
                                        <div class="hexIn">
                                            <a class="hexLink   hexa_bg_{{$cat}} " href="javascript:void(0);">
                                                <img src=" https://lifevitaelive.com/assets/img/strength/{{$url}} ">
                                                        <p>{{$strength->strengths}}</p>
                                            </a>
                                            <a class="hexLink-back   hexa_bg_{{$cat}} " href="javascript:void(0);">
                                                <p class="strength_descr">
                                                    {{$desc}}
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            <li class="hex-list">
                                <div class="hex">
                                    <div class="hexIn">
                                        <a class="hexLink   hexa_bg_Cognitive " href="javascript:void(0);">
                                                <img src=" https://lifevitaelive.com/assets/img/strength/1.01 Problem Solving.png ">
                                                    <p>Problem Solving</p>
                                        </a>
                                        <a class="hexLink-back   hexa_bg_Cognitive " href="javascript:void(0);">
                                            <p class="strength_descr">
                                                You are always looking for different ways to solve complex problems </p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div style="padding-bottom: 5px;">
                        <div class="add_button" id="open_life_strengths_modal" onclick="LifeStrengths()"> <i class="fa fa-plus" aria-hidden="true"></i> Update Life<b>Strengths</b></div>
                    </div>
                </div>
                <div id="profile_timeline">
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="heading-section">Life<b>Achievements</b> <span data-tooltip="LifeAchievements are the accomplishments that matter to you and highlight your successes in your life journey. They can be curricular or extra-curricular accomplishments." data-tooltip-location="top">
                                <i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i></span></p>
                            <div style="clear: both;"></div>
                        </div>
                        <div class="col-lg-2">
                            <div class="three_dots" data-tooltip="Reorder your entries by clicking and dragging the LifeAchievements boxes." data-tooltip-location="top" style="cursor: pointer;">
                                <svg class="Ellipse_187_p"><ellipse fill="rgba(112,112,112,1)" id="Ellipse_187_p" rx="2" ry="2" cx="2" cy="2"></ellipse></svg>
                                <svg class="Ellipse_187_p"><ellipse fill="rgba(112,112,112,1)" id="Ellipse_187_p" rx="2" ry="2" cx="2" cy="2"></ellipse></svg>
                                <svg class="Ellipse_187_p"><ellipse fill="rgba(112,112,112,1)" id="Ellipse_187_p" rx="2" ry="2" cx="2" cy="2"></ellipse></svg>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div id="achievements_main_outerlinee" class="achievement-sortable" aria-dropeffect="move">
                        @foreach( $Achievement as $item)
                            @if($item['type']==2 || $item['type']==3)
                                 <?php $name=0;
                                    foreach($Categories as $category)
                                    {
                                        if($category['id']==$item['category_id'])
                                        {
                                            $name=$category['school_name'];
                                        }
                                    }
                                ?>
                                <?php $strcat=0;
                                    foreach($Strengthslist as $stngs)
                                    {
                                        if($stngs['achievements_strength']==$item['strength'])
                                        {
                                            $strcat=$stngs['strength_category'];
                                        }
                                    }
                                ?>
                                <div class="profile_outerline achievements_overview_outerlinee" data-id="9306" draggable="true" role="option" aria-grabbed="false">
                                    <div class="row">
                                        <div class="col-lg-12 achievements_image_icon">
                                            <div class="achievements_icon">@if($item['type']==3) Curricular @endif @if($item['type']==2) Extra-Curricular @endif<i style="margin: 0 10px;" class="fa fa-trophy"></i></div>
                                        </div><br/>
                                        @if($item['media_type']==NULL || $item['media_type']=="link" || $item['media']==NULL)
                                            <div class="col-lg-12">
                                                <div class="passion_title">{{$item['title']}}
                                                    @if($item['school_approved']==1)   <i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i> @endif
                                                </div>
                                                <div class="achievements_title_category">{{$name}}</div>
                                                    <div class="achievements_subtitle">{{$item['standard']}}th Standard</div>
                                                    <div class="achievements_desc">{{$item['details']}}</div>
                                            </div>
                                        @endif
                                        @if($item['media_type']=="image" && $item['media']!=NULL)
                                            <div class="col-lg-8">
                                                <div class="passion_title">{{$item['title']}}
                                                    @if($item['school_approved']==1)   <i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i> @endif
                                                </div>
                                                <div class="achievements_title_category">{{$name}}</div>
                                                <div class="achievements_subtitle">{{$item['standard']}}th Standard</div>
                                                <div class="achievements_desc">{{$item['details']}}</div>
                                            </div>
                                            <div class="col-lg-4">
                                                <img class="achievements_img_right" src="{{url('storage/img/'.$item['media'])}}" id="mask_group_121">
                                            </div>
                                        @endif
                                        <div class="col-lg-10">
                                            <div class="passion_stregnth stregnth_red" style="color: #2d5597">
                                                <svg class="Polygon_62_ks" viewBox="0 0 15.75 14" style="width: 15px; height: 15px; margin-top: -5px;">
                                                    <path fill="#2d5597" id="Polygon_62_ks" d="M 10.64280319213867 0 C 11.3653507232666 0 12.03171825408936 0.3897235691547394 12.38595581054688 1.019477605819702 L 15.19845485687256 6.019476413726807 C 15.54092025756836 6.628304004669189 15.54092025756836 7.371695041656494 15.19845485687256 7.980522155761719 L 12.38595581054688 12.98052215576172 C 12.03171825408936 13.610276222229 11.3653507232666 13.99999904632568 10.64280319213867 13.99999904632568 L 5.107193946838379 13.99999904632568 C 4.384647846221924 13.99999904632568 3.718279838562012 13.610276222229 3.364043235778809 12.98052215576172 L 0.5515440106391907 7.980521678924561 C 0.2090787589550018 7.371694564819336 0.2090788334608078 6.628303527832031 0.5515442490577698 6.019475936889648 L 3.364044427871704 1.019477248191833 C 3.718281269073486 0.3897233903408051 4.38464879989624 0 5.107195854187012 0 Z">
                                                    </path>
                                                </svg>
                                                <b> {{$item['strength']}} </b>({{$strcat}})
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            @if($item['school_approved']==0) <p style="float: right; margin: 10px 0;">&nbsp;<a href={{"deleteachievement/".$item['id']}} style="text-decoration: none;color:black;"><span class="lifeachievement_edit_delete" style="display:block;" data-id="9313" onclick="return confirm('Are you sure you want to delete the user?\nNote: Once Deleted the Data Cannot Be Retrieved. ')"><i class="fa fa-trash" aria-hidden="true"></i></span></a></p> @endif
                                            @if($item['school_approved']==0) <p style="float: right; margin: 10px 0;">&nbsp;<span class="lifeachievement_edit" style="display:block;" data-id="9313" onclick="lifeachievementedit({{$item['id']}})"><i class="fa fa-pen" aria-hidden="true"></i></span></p> @endif
                                        </div>
                                        @if($item['media_type']=="link" && $item['media']!=NULL)
                                            <?php $ursl=$item['media']
                                            ?>
                                            <div class="col-lg-12">
                                                    <a href="{{$ursl}}" target="_blank" style="color:red; text-decoration:none;"> Link </a>
                                            </div>
                                        @endif
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            @endif
                        @endforeach
                        <div class="profile_outerline achievements_overview_outerlinee" data-id="9313" draggable="true" role="option" aria-grabbed="false">
                            <div class="row">
                                <div class="col-lg-12 achievements_image_icon">
                                    <div class="achievements_icon">Curricular <i style="margin: 0 10px;" class="fa fa-trophy"></i></div><br/>
                                </div>
                                <div class="col-lg-12">
                                    <div class="passion_title">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures
                                    </div>
                                    <div class="achievements_title_category">Sports / Physical Achievement</div>
                                    <div class="achievements_subtitle">8th Standard</div>
                                    <div class="achievements_desc">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures</div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="passion_stregnth stregnth_red" style="color: #c00000">
                                        <svg class="Polygon_62_ks" viewBox="0 0 15.75 14" style="width: 15px; height: 15px; margin-top: -5px;">
                                            <path fill="#c00000" id="Polygon_62_ks" d="M 10.64280319213867 0 C 11.3653507232666 0 12.03171825408936 0.3897235691547394 12.38595581054688 1.019477605819702 L 15.19845485687256 6.019476413726807 C 15.54092025756836 6.628304004669189 15.54092025756836 7.371695041656494 15.19845485687256 7.980522155761719 L 12.38595581054688 12.98052215576172 C 12.03171825408936 13.610276222229 11.3653507232666 13.99999904632568 10.64280319213867 13.99999904632568 L 5.107193946838379 13.99999904632568 C 4.384647846221924 13.99999904632568 3.718279838562012 13.610276222229 3.364043235778809 12.98052215576172 L 0.5515440106391907 7.980521678924561 C 0.2090787589550018 7.371694564819336 0.2090788334608078 6.628303527832031 0.5515442490577698 6.019475936889648 L 3.364044427871704 1.019477248191833 C 3.718281269073486 0.3897233903408051 4.38464879989624 0 5.107195854187012 0 Z">
                                            </path>
                                        </svg>
                                        <b>Confidence</b>(Motive)
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <p style="float: right; margin: 10px 0;">&nbsp;<span class="lifeachievement_edit_delete" style="display:block;" data-id="9313"><i class="fa fa-trash"></i></span></p>
                                    <p style="float: right; margin: 10px 0;">&nbsp;<span class="lifeachievement_edit" style="display:block;"data-id="9313"><i class="fa fa-pen" ></i></span></p>
                                </div>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>
                    <div style="padding-bottom: 5px;">
                        <a herf="" onclick="myfunction()">
                            <div class="add_button" id="life_achievement_tour"> <i class="fa fa-plus" aria-hidden="true" ></i> Add a Life<b>Achievement</b></div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="profile_timeline">
                            <div class="row">
                                <div class="col-lg-10">
                                    <p class="heading-section">Life<b>Passions</b> <span data-tooltip="LifePassions are things that you're interested in - your hobbies or causes that you're deeply connected to. It could even be a new sports activity that you've incorporated into your life. What makes your heart soar?" data-tooltip-location="top"><i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i></span></p>
                                </div>
                                <div class="col-lg-2">
                                    <div class="three_dots" data-tooltip="Reorder your entries by clicking and dragging the LifePassions boxes." data-tooltip-location="top" style="cursor: pointer;">
                                        <svg class="Ellipse_187_p"><ellipse fill="rgba(112,112,112,1)" id="Ellipse_187_p" rx="2" ry="2" cx="2" cy="2"></ellipse></svg>
                                        <svg class="Ellipse_187_p"><ellipse fill="rgba(112,112,112,1)" id="Ellipse_187_p" rx="2" ry="2" cx="2" cy="2"></ellipse></svg>
                                        <svg class="Ellipse_187_p"><ellipse fill="rgba(112,112,112,1)" id="Ellipse_187_p" rx="2" ry="2" cx="2" cy="2"></ellipse></svg>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <div class="rowws" style="padding-bottom: 30px;">
                                <div id="passion_main_outerline" class="passion-sortable" aria-dropeffect="move">
                                    @foreach( $Achievement as $item)
                                        @if($item['type']==1)
                                            <?php $name=0;
                                                foreach($Categories as $category)
                                                {
                                                    if($category['id']==$item['category_id'])
                                                    {
                                                        $name=$category['name'];
                                                    }
                                                }
                                            ?>
                                            <div class="profile_outerline profile_outerline_overview" data-id="9310" draggable="true" role="option" aria-grabbed="false">
                                                <div class="row">
                                                    @if($item['media_type']==NULL || $item['media_type']=="link" || $item['media']==NULL)
                                                        <div class="col-lg-12">
                                                            <div class="passion_title">{{$item['title']}}
                                                                @if($item['school_approved']==1)   <i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i> @endif
                                                            </div>
                                                            <div class="achievements_title_category">{{$name}}</div>
                                                                <div class="achievements_subtitle">{{$item['standard']}}th Standard</div>
                                                                <div class="achievements_desc">{{$item['details']}}</div>
                                                        </div>
                                                    @endif
                                                    @if( $item['media_type']=="image" && $item['media']!=NULL)
                                                        <div class="col-lg-8">
                                                            <div class="passion_title">{{$item['title']}}
                                                                @if($item['school_approved']==1)   <i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i> @endif
                                                            </div>
                                                            <div class="achievements_title_category">{{$name}}</div>
                                                            <div class="achievements_subtitle">{{$item['standard']}}th Standard</div>
                                                            <div class="achievements_desc">{{$item['details']}}</div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <img class="achievements_img_right" src="{{url('storage/img/'.$item['media'])}}" id="mask_group_121">
                                                        </div>
                                                    @endif
                                                    <div class="col-lg-10">
                                                        <div class="passion_stregnth stregnth_red" style="color: #5b9bd5">
                                                            <svg class="Polygon_62_ks" viewBox="0 0 15.75 14" style="width: 15px; height: 15px; margin-top: -5px;">
                                                                <path fill="#5b9bd5" id="Polygon_62_ks" d="M 10.64280319213867 0 C 11.3653507232666 0 12.03171825408936 0.3897235691547394 12.38595581054688 1.019477605819702 L 15.19845485687256 6.019476413726807 C 15.54092025756836 6.628304004669189 15.54092025756836 7.371695041656494 15.19845485687256 7.980522155761719 L 12.38595581054688 12.98052215576172 C 12.03171825408936 13.610276222229 11.3653507232666 13.99999904632568 10.64280319213867 13.99999904632568 L 5.107193946838379 13.99999904632568 C 4.384647846221924 13.99999904632568 3.718279838562012 13.610276222229 3.364043235778809 12.98052215576172 L 0.5515440106391907 7.980521678924561 C 0.2090787589550018 7.371694564819336 0.2090788334608078 6.628303527832031 0.5515442490577698 6.019475936889648 L 3.364044427871704 1.019477248191833 C 3.718281269073486 0.3897233903408051 4.38464879989624 0 5.107195854187012 0 Z">
                                                                </path>
                                                            </svg>
                                                            <b>{{$item['strength']}}</b>(Interactive)
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        @if($item['school_approved']==0) <p style="float: right; margin: 10px 0;">&nbsp;<a href={{"deletepassion/".$item['id']}} style="color:black;"><span class="lifepassion_edit_delete" style="display:block;" data-id="9313"onclick="return confirm('Are you sure you want to delete the Passion?\nNote: Once Deleted the Data Cannot Be Retrieved.')"><i class="fa fa-trash" aria-hidden="true"></i></span></a></p> @endif
                                                        @if($item['school_approved']==0) <p style="float: right; margin: 10px 0;">&nbsp;<span class="lifepassion_edit" style="display:block;" data-id="9313"><i class="fa fa-pen" aria-hidden="true" onclick="lifepassionedit({{$item['id']}})"></i></span></p> @endif
                                                    </div>
                                                    @if($item['media_type']=="link" && $item['media']!=NULL)
                                                        <?php $ursl=$item['media']
                                                        ?>
                                                        <div class="col-lg-12">
                                                                <a href="{{$ursl}}" target="_blank" style="color:red; text-decoration:none;"> Link </a>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="profile_outerline profile_outerline_overview" data-id="9311" draggable="true" role="option" aria-grabbed="false">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="passion_title">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text
                                                    <i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i>
                                                </div>
                                                <div class="achievements_title_category">Social and Cultural Activities</div>
                                                    <div class="achievements_desc">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</div>
                                                </div>
                                            <div class="col-lg-10">
                                                <div class="passion_stregnth stregnth_red" style="color: #5b9bd5">
                                                    <svg class="Polygon_62_ks" viewBox="0 0 15.75 14" style="width: 15px; height: 15px; margin-top: -5px;">
                                                        <path fill="#5b9bd5" id="Polygon_62_ks" d="M 10.64280319213867 0 C 11.3653507232666 0 12.03171825408936 0.3897235691547394 12.38595581054688 1.019477605819702 L 15.19845485687256 6.019476413726807 C 15.54092025756836 6.628304004669189 15.54092025756836 7.371695041656494 15.19845485687256 7.980522155761719 L 12.38595581054688 12.98052215576172 C 12.03171825408936 13.610276222229 11.3653507232666 13.99999904632568 10.64280319213867 13.99999904632568 L 5.107193946838379 13.99999904632568 C 4.384647846221924 13.99999904632568 3.718279838562012 13.610276222229 3.364043235778809 12.98052215576172 L 0.5515440106391907 7.980521678924561 C 0.2090787589550018 7.371694564819336 0.2090788334608078 6.628303527832031 0.5515442490577698 6.019475936889648 L 3.364044427871704 1.019477248191833 C 3.718281269073486 0.3897233903408051 4.38464879989624 0 5.107195854187012 0 Z">
                                                        </path>
                                                    </svg>
                                                    <b>Eloquence</b>(Interactive)
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                            </div>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a onclick="passionfunction()" style="text-decoration:none;font-color:black;">
                                            <div class="add_button" id="life_passion_tour"> <i class="fa fa-plus" aria-hidden="true"></i> Add a Life<b>Passion</b></div>
                                        </a>
                                    </div>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="profile_timeline">
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="heading-section">Life<b>Moments</b>
                                <span data-tooltip="LifeMoments is the most important part of your LifeVitae profile. This section enables you to show your character in times of adversity and success." data-tooltip-location="top">
                                    <i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i>
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="life_momentss">
                                @foreach($Answers as $moment)
                                    <li>
                                        <div class="moments_title" onclick="getquestionbyid({{$moment['question_id']}})" id="paste_question_{{$moment['question_id']}}">
                                            <script>
                                                $(document).ready(function()
                                                {
                                                    var x= "{{$moment['question_id']}}";
                                                    var y=document.getElementById('question_id_'.concat(x-1)).textContent;
                                                    document.getElementById('paste_question_'.concat(x)).innerHTML = y;
                                                });
                                            </script>
                                            @if($moment['school_apprved']==1)<i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i>@endif
                                        </div>
                                        <div class="moments_desc">{{$moment['answer']}}</div>
                                    </li>
                                @endforeach
                                <li>
                                    <div class="moments_title">When I made a mistake and had to admit it ?
                                        <i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i>
                                    </div>
                                    <div class="moments_desc">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</div>
                                </li>
                            </ul>
                                <a onclick="momentfunction()">
                                    <div class="add_button" style="margin-top: 50px;" id="life_moment_tour"> <i class="fa fa-plus" aria-hidden="true"></i> Add/Edit Life<b>Moment</b></div>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div id="profile_timeline" class="only_desktop_display_task">
                    <div id="task_live_main">
                        <div id="tasks_tourr">
                            <div class="row" id="tasks_tour">
                            </div>
                        </div>
                        <p style="font-size: 10px; display: none; padding: 0rem 2rem 1rem 2rem;" id="refresh_task_reload">*Refresh the page to update</p>
                        <div class="row connection_more">
                            <div class="col-lg-12">
                                <p style="margin: 2rem 2rem 2rem 2rem;font-size: 14px;color: #40C4C1;border: 1px solid #40C4C1;padding: 10px;border-radius: 10px;text-align: center;">Your profile has been approved.</p>
                                <p style="margin: 0 2rem 2rem 2rem;font-size: 10px;padding: 10px;text-align: center;">*The next round of the profile approval process will happen during the next term. You may continue to add new information until then. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .connection_dialog{
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                    }
                </style>
                <div id="profile_timeline">
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="heading-section">Transcripts/Recommendation Letters</p>
                        </div>
                        <div class="col-lg-2">
                            <div style="clear:both"></div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="life_moments">
                            <li style="list-style: none;margin-top: 10px;padding-bottom: 10px;">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="icon_ionic_ios_time_img"><img style="width: 40px; float: left;" src="https://lifevitaelive.com/assets/skins1/pdf.png" id="icon_ionic_ios_time"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="profile_view_pdf" data-id="16" style="font-size: 15px;padding: 5px;border: 1px solid #40C4C1;color: #fff;background: #40C4C1;width: 80px;text-align: center;border-radius: 10px;cursor: pointer;margin-top: 5px;">View</div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
                <div id="profile_timeline">
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="heading-section">Wishlist</p>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div style="padding: 1rem;">
                        <div class="row" id="wishlist">
                            <div class="col-lg-4 books_data b_i_a active" style="border: 1px solid #ebebeb;cursor: pointer;"><p style="text-align: center;margin-bottom: 0rem;padding: 0.5rem 0;margin-top: 10px;" onclick="wishlistfunction('books_uni', 'books_data')">Books</p></div>
                            <div class="col-lg-4 india_data b_i_a" style="border: 1px solid #ebebeb;cursor: pointer;"><p style="text-align: center;margin-bottom: 0rem;padding: 0.5rem 0;" onclick="wishlistfunction('india_uni', 'india_data')">Higher Ed. - India</p></div>
                            <div class="col-lg-4 abroad_data b_i_a" style="border: 1px solid #ebebeb;cursor: pointer;"><p style="text-align: center;margin-bottom: 0rem;padding: 0.5rem 0;" onclick="wishlistfunction('abroad_uni', 'abroad_data')">Higher Ed. - Abroad</p></div>
                        </div>
                    </div>
                    <style>
                    .india_uni{
                        display:none;
                    }
                    .books_uni{
                        display:block;
                    }
                    .abroad_uni{
                        display:none;
                    }
                    .india_uni p{
                        margin-bottom: 0rem;
                    }
                    .abroad_uni p{
                        margin-bottom: 0rem;
                    }
                    .india_uni .main_class{
                        padding: 0.5rem 0;
                        margin: 0 0.5rem;
                        border-bottom: 1px solid #ebebeb;
                    }
                    .abroad_uni .main_class{
                        padding: 0.5rem 0;
                        margin: 0 0.5rem;
                        border-bottom: 1px solid #ebebeb;
                    }
                    .active {
                        background: #ebebeb;
                        color: #40C4C1;
                    }
                    </style>
                    <div style="padding: 1rem;" class="books_uni b_a_i">
                        <div class="row main_class">
                            <div class="col-lg-12"><p>You have not added any books to your wishlist.</p></div>
                        </div>
                    </div>
                    <div style="padding: 1rem;" class="india_uni b_a_i">
                        <div class="row main_class">
                            <div class="col-lg-12"><p>You have not added any universities to your wishlist.</p></div>
                        </div>
                    </div>
                    <div style="padding: 1rem;" class="abroad_uni b_a_i">
                        <div class="row main_class">
                            <div class="col-lg-12"><p>You have not added any universities to your wishlist.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="modal fade in" id="life_strengths_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="padding-left: 5px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" onclick="LifeStrengths()">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <p class="welcome_headline">Update: Top LifeStrengths</p>
                        <p style="text-align: center;padding: 0 20px;">These are the LifeStrengths you have unlocked so far. You may select upto 10 LifeStrengths. Fill up more details in your LifeVitae to unlock more LifeStrengths.</p>
                        <p class="sucess_message_text" style="display: none;">LifeStrengths saved successfully</p>
                        <p class="error_message_text" style="display: none;">something went wrong please try again later.</p>
                    </div>
                </div>
                <form name="strengthsform" id="lifestrength-form" action="addstrength" method="POST">
                @csrf
                    <div class="row lifestrength-pop-grid" style="">
                        <div class="col-lg-12" id="strength-h-Grid-popup">
                            <ul id="strength-h-Grid">
                                @foreach($Strengthslist as $strengthdesc)
                                    <li class="strength-h-">
                                        <div class="strength-h-In">
                                            <div class="life-strength-check cognitive-check data-check  select_hexa_bg_Creative " data-id="">
                                                <div class="life-strengths-check">
                                                    <?php
                                                                $flag=0;
                                                                foreach($Strengths as $stren)
                                                                {
                                                                    if($stren['strengths']==$strengthdesc['achievements_strength'])
                                                                    {
                                                                            $flag=1;
                                                                    }
                                                                }
                                                    ?>
                                                    <input type="checkbox" class="strength-check" value="{{$strengthdesc['achievements_strength']}}" name="life_str[]" id="{{$strengthdesc['id']}}" <?php if($flag==1){ echo "checked";}?>/>
                                                    <label class="" for="{{$strengthdesc['id']}}">
                                                        <img src=" https://lifevitaelive.com/assets/img/strength/{{$strengthdesc['image']}}"><br>
                                                            {{$strengthdesc['achievements_strength']}}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="row" style="margin: 1rem 3rem;">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <button type="submit" class="save_add_publish" id="submit_lifestrength" style="width: 100%;"><i class="fa fa-save icon_save"></i> Save</button>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                    <div class="row" style="margin: 1rem 3rem;"></div>
                </form>
            </div>
        </div>
    </div>
    <style>
            #life_achievements_modal{
                display:none;
            }
            .note {
            width: 500px;
            margin: 50px auto;
            font-size: 1.1em;
            color: #333;
            text-align: justify;
            }
            #main_dropzone {

            }
            #main_dropzone >highlight {
            border-color: purple;
            }
            #main_dropzone_1 {

            }
            #main_dropzone_1 >highlight {
                border-color: purple;
            }
            .my-form {
            margin-bottom: 10px;
            }
            #gallery {
            margin-top: 10px;
            }
            #gallery img {
            width: 150px;
            margin-bottom: 10px;
            margin-right: 10px;
            vertical-align: middle;
            }
            #gallery_1 {
            margin-top: 10px;
            }
            #gallery_1 img {
            width: 150px;
            margin-bottom: 10px;
            margin-right: 10px;
            vertical-align: middle;
            }
            .button {
            display: inline-block;
            padding: 10px;
            background: #ccc;
            cursor: pointer;
            border-radius: 5px;
            border: 1px solid #ccc;
            }
            .button:hover {
            background: #ddd;
            }
            #fileElem {
            display: none;
            }
    </style>
    <div class="modal fade in" id="life_achievements_modal" tabindex="0" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="padding-left:5px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myfunction()">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="row">
                  <div class="col-lg-9"></div>
                  <div class="col-lg-3">
                    <p id="hints-achievements" style="color: #40C4C1;font-size: 15px;text-decoration: underline;cursor: pointer;text-align: center;border: 1px solid;padding: 5px;border-radius: 5px; font-weight: bold;text-decoration: none;" onclick="achievementexample()">View Example</p>
                    <div style="clear: both;"></div>
                  </div>
                </div>
                <div class="col-lg-12">
                    <p class="welcome_headline">Add entry: LifeAchievement</p>
                    <p id="hints-achievementsssss" style="font-size: 13px; text-align: center; ">Edit content and include media when applicable</p>
                    <p class="sucess_message_text" style="display: none;color:green;">LifeAchievement saved successfully</p>
                    <p class="error_message_text" style="display: none;color:red;">something went wrong please try again later.</p>
                </div>
            </div>
              <form class="achievement_submit_form_class achievement_submit_form_class_another" id="lifeachievement-form" method="POST" action="" novalidate="novalidate" enctype="multipart/form-data">
                @csrf
                    <div class="row" style="margin: 1rem 3rem;">
                    <div class="col-lg-6">
                        <div class="row">
                          <div class="col-lg-7">
                            <div class="form-group">
                                <label class="control-label">Title*</label>
                                <input name="professional_title" id="life_event" placeholder="What is this about?" type="text" class="mid js_life_event form-control" maxlength="150" autocomplete="off" required>
                            </div>
                          </div>
                          <div class="col-lg-5">
                              <div class="form-group">
                                <div class="signup-section" style="padding-bottom: 0px; border-radius: 6px 0 0 6px;">
                                  <label class="control-label">Select a tag*</label>
                                  <div class="life-tools mb-2">
                                      <div class="life-media" style="border: 1px solid #ced4da;">
                                          <input type="radio" value="3" name="professional_tag" id="tag_0" class="picture" onclick="categoryfunction('2')" checked="">
                                          <label for="tag_0" style="width: 100%;margin: 0 auto;font-size: 10px; display: block!important; border-radius: 6px 0 0 6px;"><i style="margin: 0 10px;" class="fa fa-briefcase"></i><br>Curricular</label>
                                      </div>
                                      <div class="life-media" style="border: 1px solid #ced4da; border-radius: 0 6px 6px 0;" onclick="categoryfunction('1')">
                                          <input type="radio" value="2" name="professional_tag" id="tag_1" class="picture">
                                          <label for="tag_1" style="width: 100%;margin: 0 auto;font-size: 10px; display: block!important; border-radius: 0 6px 6px 0;"><i class="fa fa-trophy"></i><br>Extra-Curricular</label>
                                      </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <input type="hidden" name="professional_category_id" id="professional_category_id" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Short description (max 250 characters)*</label>
                            <textarea rows="3" name="professional_detail" autocomplete="off" cols="3" class="form-control mt-3 detail" placeholder="Write a brief summary" maxlength="250" required></textarea>
                        </div>
                        <div class="form-group" id="category_categories_professional" style="display: none;">
                            <label id="head_professional_que" class="control-label">Category (what best describes your achievement?)* <span data-tooltip="LifeAchievements are the accomplishments that matter to you and highlight your successes in your life journey. They can be curricular or extra-curricular accomplishments." data-tooltip-location="top"><i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i></span> </label>
                            <div class="js_category">
                                <select name="professional_category" onchange="strengthdisplay('category_0')" id="category_0" data-id="0" class="form-control mb-3 lifeachievements-select-professional category">
                                    <option value="" data-id="">Category</option>
                                    <option value="7" data-id="7" >Mental Ability Achievement</option>
                                    <option value="8" data-id="8" >Leadership Achievement</option>
                                    <option value="9" data-id="9">Teamwork Achievement</option>
                                    <option value="10" data-id="10">Creative / Artistic / Design Achievement</option>
                                    <option value="11" data-id="11">Community Service / Social Work Achievement</option>
                                    <option value="12" data-id="12">Self-Improvement / Self-Development Achievement </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="category_categories_personal">
                            <label id="head_personal_que" class="control-label">Category (what best describes your achievement?)* <span data-tooltip="Once you’ve described your achievement, select a category that best represents what your achievement is about. For example, if you've volunteered for NGOs, charities etc, it would be under the 'Community Service / Social Work Achievement' category." data-tooltip-location="top"><i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i></span> </label>
                            <div class="js_category">
                                <select name="professional_category" onchange="strengthdisplay('category_1')"  id="category_1" data-id="0" class="form-control mb-3 lifeachievements-select-personal category">
                                    <option value="" data-id="">Category</option>
                                        <option value="13" data-id="13" >Academic Achievement</option>
                                        <option value="14" data-id="14" >Sports / Physical Achievement</option>
                                        <option value="15" data-id="15" >Teamwork Achievement</option>
                                        <option value="16" data-id="16">Creative / Artistic / Design Achievement</option>
                                        <option value="17" data-id="17">Community Service / Social Work Achievement</option>
                                        <option value="18" data-id="18">Self-Improvement / Self-Development Achievement </option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Standard*</label>
                            <div class="js_category">
                                <select name="standard" id="lifeachievement_standard" data-id="0" class="form-control mb-3 Standard" required>
                                    <option value="" data-id="">Standard</option>
                                    <option value="<6">&lt;6th</option>
                                    <option value="6">6th</option>
                                    <option value="7">7th</option>
                                    <option value="8">8th</option>
                                    <option value="9">9th</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="container-checkbox">Add entry to LifeLine
                              <input type="checkbox" checked="checked" name="add_lifeline" class="form-control" value="1">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group signup-section">
                            <label class="control-label">LifeStrength (select one LifeStrength this achievement reinforces)*</label>
                            <div class="lifeachievements-strengths-box re-design">
                                <div class="lifeachievements-strengths-box re-design">
                                    <div class="pic-message js_error"><p class="js_error">Pick one strength.</p></div>
                                    <div class="strengths-widget strength-widget-8 strength-widget-14">
                                        <input type="radio" class="js_radio " value="Drive" name="professional_strength" id="undefinedDrive">
                                        <label for="undefinedDrive" onclick=""><i class="hexa_strength"></i>Drive</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-8 strength-widget-14">
                                        <input type="radio" class="js_radio" value="Confidence" name="professional_strength" id="undefinedConfidence">
                                        <label for="undefinedConfidence" onclick=""><i class="hexa_strength"></i>Confidence</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-8 strength-widget-14">
                                        <input type="radio" class="js_radio" value="Integrity" name="professional_strength" id="undefinedIntegrity">
                                        <label for="undefinedIntegrity" onclick=""><i class="hexa_strength"></i>Integrity</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-8 strength-widget-14">
                                        <input type="radio" class="js_radio" value="Dependability" name="professional_strength" id="undefinedDependability">
                                        <label for="undefinedDependability" onclick=""><i class="hexa_strength"></i>Dependability</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-8 strength-widget-14">
                                        <input type="radio" class="js_radio" value="Objectivity" name="professional_strength" id="undefinedObjectivity">
                                        <label for="undefinedObjectivity" onclick=""><i class="hexa_strength"></i>Objectivity</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-7 strength-widget-13">
                                        <input type="radio" class="js_radio" value="Problem Solving" name="professional_strength" id="undefinedProblem Solving">
                                        <label for="undefinedProblem Solving" onclick=""><i class="hexa_strength"></i>Problem Solving</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-7 strength-widget-13">
                                        <input type="radio" class="js_radio" value="Decisiveness" name="professional_strength" id="undefinedDecisiveness">
                                        <label for="undefinedDecisiveness" onclick=""><i class="hexa_strength"></i>Decisiveness</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-7 strength-widget-13">
                                        <input type="radio" class="js_radio" value="Originality" name="professional_strength" id="undefinedOriginality">
                                        <label for="undefinedOriginality" onclick=""><i class="hexa_strength"></i>Originality</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-7 strength-widget-13">
                                        <input type="radio" class="js_radio" value="Simplifying the Complex" name="professional_strength" id="undefinedSimplifying the Complex">
                                        <label for="undefinedSimplifying the Complex" onclick=""><i class="hexa_strength"></i>Simplifying the Complex</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-7 strength-widget-13">
                                        <input type="radio" class="js_radio" value="Thinking ahead" name="professional_strength" id="undefinedThinking ahead">
                                        <label for="undefinedThinking ahead" onclick=""><i class="hexa_strength"></i>Thinking ahead</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-7 strength-widget-13">
                                        <input type="radio" class="js_radio" value="Sense Making" name="professional_strength" id="undefinedSense Making">
                                        <label for="undefinedSense Making" onclick=""><i class="hexa_strength"></i>Sense Making</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-9 strength-widget-15">
                                        <input type="radio" class="js_radio " value="Engagement" name="professional_strength" id="undefinedEngagement">
                                        <label for="undefinedEngagement" onclick=""><i class="hexa_strength"></i>Engagement</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-9 strength-widget-15">
                                        <input type="radio" class="js_radio" value="Diplomacy" name="professional_strength" id="undefinedDiplomacy">
                                        <label for="undefinedDiplomacy" onclick=""><i class="hexa_strength"></i>Diplomacy</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-9 strength-widget-15">
                                        <input type="radio" class="js_radio" value="Eloquence" name="professional_strength" id="undefinedEloquence">
                                        <label for="undefinedEloquence" onclick=""><i class="hexa_strength"></i>Eloquence</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-9 strength-widget-15">
                                        <input type="radio" class="js_radio" value="Social Flexibility" name="professional_strength" id="undefinedSocial Flexibility">
                                        <label for="undefinedSocial Flexibility" onclick=""><i class="hexa_strength"></i>Social Flexibility</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-9 strength-widget-15">
                                        <input type="radio" class="js_radio" value="Being Persuasive" name="professional_strength" id="undefinedBeing Persuasive">
                                        <label for="undefinedBeing Persuasive" onclick=""><i class="hexa_strength"></i>Being Persuasive</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-10 strength-widget-16">
                                        <input type="radio" class="js_radio" value="Curiosity" name="professional_strength" id="undefinedCuriosity">
                                        <label for="undefinedCuriosity" onclick=""><i class="hexa_strength"></i>Curiosity</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-10 strength-widget-16">
                                        <input type="radio" class="js_radio" value="Taking Risk" name="professional_strength" id="undefinedTaking Risk">
                                        <label for="undefinedTaking Risk" onclick=""><i class="hexa_strength"></i>Taking Risk</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-10 strength-widget-16">
                                        <input type="radio" class="js_radio" value="Entrepreneurship" name="professional_strength" id="undefinedEntrepreneurship">
                                        <label for="undefinedEntrepreneurship" onclick=""><i class="hexa_strength"></i>Entrepreneurship</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-10 strength-widget-16">
                                        <input type="radio" class="js_radio" value="Pioneering" name="professional_strength" id="undefinedPioneering">
                                        <label for="undefinedPioneering" onclick=""><i class="hexa_strength"></i>Pioneering</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-10 strength-widget-16">
                                        <input type="radio" class="js_radio" value="Challenging the Norm" name="professional_strength" id="undefinedChallenging the Norm">
                                        <label for="undefinedChallenging the Norm" onclick=""><i class="hexa_strength"></i>Challenging the Norm</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-11 strength-widget-17">
                                        <input type="radio" class="js_radio" value="Empathy" name="professional_strength" id="undefinedEmpathy">
                                        <label for="undefinedEmpathy" onclick=""><i class="hexa_strength"></i>Empathy</label>
                                    </div>
                                    <div class="strengths-widget  strength-widget-11 strength-widget-17">
                                        <input type="radio" class="js_radio" value="Self Awareness" name="professional_strength" id="undefinedSelf Awareness">
                                        <label for="undefinedSelf Awareness" onclick=""><i class="hexa_strength"></i>Self Awareness</label>
                                    </div>
                                    <div class="strengths-widget  strength-widget-11 strength-widget-17">
                                        <input type="radio" class="js_radio" value="Calmness" name="professional_strength" id="undefinedCalmness">
                                        <label for="undefinedCalmness" onclick=""><i class="hexa_strength"></i>Calmness</label>
                                    </div>
                                    <div class="strengths-widget  strength-widget-11 strength-widget-17">
                                        <input type="radio" class="js_radio" value="Trust" name="professional_strength" id="undefinedTrust">
                                        <label for="undefinedTrust" onclick=""><i class="hexa_strength"></i>Trust</label>
                                    </div>
                                    <div class="strengths-widget  strength-widget-11 strength-widget-17">
                                        <input type="radio" class="js_radio" value="Patience" name="professional_strength" id="undefinedPatience">
                                        <label for="undefinedPatience" onclick=""><i class="hexa_strength"></i>Patience</label>
                                    </div>
                                    <div class="strengths-widget  strength-widget-11 strength-widget-17">
                                        <input type="radio" class="js_radio" value="Gratitude" name="professional_strength" id="undefinedGratitude">
                                        <label for="undefinedGratitude" onclick=""><i class="hexa_strength"></i>Gratitude</label>
                                    </div>
                                    <div class="strengths-widget  strength-widget-11 strength-widget-17">
                                        <input type="radio" class="js_radio" value="Compassion" name="professional_strength" id="undefinedCompassion">
                                        <label for="undefinedCompassion" onclick=""><i class="hexa_strength"></i>Compassion</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-12 strength-widget-18">
                                        <input type="radio" class="js_radio" value="Resilience" name="professional_strength" id="undefinedResilience">
                                        <label for="undefinedResilience" onclick=""><i class="hexa_strength"></i>Resilience</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-12 strength-widget-18">
                                        <input type="radio" class="js_radio" value="Dealing with Adversity" name="professional_strength" id="undefinedDealing with Adversity">
                                        <label for="undefinedDealing with Adversity" onclick=""><i class="hexa_strength"></i>Dealing with Adversity</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-12 strength-widget-18">
                                        <input type="radio" class="js_radio" value="Self Discipline" name="professional_strength" id="undefinedSelf Discipline">
                                        <label for="undefinedSelf Discipline" onclick=""><i class="hexa_strength"></i>Self Discipline</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-12 strength-widget-18">
                                        <input type="radio" class="js_radio" value="Persistence" name="professional_strength" id="undefinedPersistence">
                                        <label for="undefinedPersistence" onclick=""><i class="hexa_strength"></i>Persistence</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-12 strength-widget-18">
                                        <input type="radio" class="js_radio" value="Humility" name="professional_strength" id="undefinedHumility">
                                        <label for="undefinedHumility" onclick=""><i class="hexa_strength"></i>Humility</label>
                                    </div>
                                    <div class="strengths-widget strength-widget-12 strength-widget-18">
                                        <input type="radio" class="js_radio" value="Agility" name="professional_strength" id="undefinedAgility">
                                        <label for="undefinedAgility" onclick=""><i class="hexa_strength"></i>Agility</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div class="strength_error_msg" style="display:none;color: #ec0404c2;">
                        </div>
                        <div class="form-group ">
                            <div class="signup-section" style="padding-bottom: 10px;">
                                <label class="control-label">Upload media (images, videos, links and/or recordings)</label>
                                <div class="life-tools mb-2">
                                    <div class="life-media" onclick="imageurlachfunction('media_main_ach')">
                                        <input type="radio" value="image" name="passion_media_type" id="picture_0" class="picture" checked="">
                                        <label for="picture_0"><i class="fa fa-upload"></i></label>
                                    </div>
                                    <div class="life-media" style="display: none;">
                                        <input type="radio" value="video" name="passion_media_type" id="audio_0" class="audio">
                                        <label for="audio_0"><i class="fa fa-file-video-o"></i></label>
                                    </div>
                                    <div class="life-media" onclick="imageurlachfunction('media_main_link_ach')">
                                        <input type="radio" value="link" name="passion_media_type" id="video_0" class="video">
                                        <label for="video_0"><i class="fa fa-link"></i></label>
                                    </div>
                                    <div class="life-media" style="display: none;">
                                        <input type="radio" value="audio" name="passion_media_type" id="link_0" class="link">
                                        <label for="link_0">
                                            <i class="fa fa-music"></i> &nbsp;
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="image_media_type" id="image_media_type" val="" value="">
                            <input type="hidden" name="image_name" id="achievement_image" val="" value="">
                            <input type="hidden" name="main_dropzone_number" id="main_dropzone_number" val="1">
                            <input type="hidden" name="main_dropzone_number_flag" id="main_dropzone_number_flag" val="0">
                            <div class="col-lg-12">
                              <div id="extra_form_1"><input type="hidden" value=""></div>
                            </div>
                            <div class="form-group ">
                                <div class="media_main_ach">
                                    <div id="main_dropzone">
                                        <div class="nniicc-dropzoneParent" style="margin: 0px;">
                                            <div class="dropzone" style="width: 300px; height: 100px; border: 2px dashed rgb(204, 204, 204); color: rgb(204, 204, 204); text-align: center; -webkit-box-align: center; -webkit-box-pack: center; z-index: 100; cursor: pointer;">
                                                <input type="file" name="files" multiple="" style="display: none;" id="fileElem" onchange="handleFiles(this.files)" accept="audio/*|video/*|image/*|"/>
                                                <label class="button" for="fileElem" style="color:black;">Select some files</label>
                                                Drag and drop your file or browse your folders
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p style="font-size: 10px;margin-bottom: 2px;">*Optimal image size is 210px by 130px</p>
                                <p style="font-size: 10px;margin-bottom: 2px;">*Maximum file size is 5MB</p>
                                <p style="font-size: 10px;">*we are accepting only "jpg", "jpeg", "png", "mp3", "wav", "mov", "avi", "mp4" file formats.</p>
                                <p style="font-size: 13px;color: red;display: none;" id="ach_dropzone_msg"></p>
                                <div class="media_main_link_ach" style="display: none;">
                                    <input type="text" class="form-control" name="media_link" id="media_link" value="" placeholder="Link">
                                </div>
                            </div>
                            <div class="form-group ">
                                <progress id="progress-bar" max=100 value=0 style="display:none;"></progress>
                                <div id="preview_img_list"></div>
                                <div id="gallery"></div>
                            </div>
                        </div>
                        <!-- <div class="form-group ">
                            <div class="form-group ">
                                <div class="media_main_ach">
                                  <div id="main_dropzone"><div class="nniicc-dropzoneParent" style="margin: 0px;">
                                        <div class="dropzone" style="width: 300px; height: 100px; border: 2px dashed rgb(204, 204, 204); color: rgb(204, 204, 204); text-align: center; -webkit-box-align: center; -webkit-box-pack: center; z-index: 100; cursor: pointer;">Drag and drop your file or browse your folders</div>
                                            <input type="file" name="files" multiple="" style="display: none;">
                                            <div class="extra-progress-wrapper">
                                                <div class="progress progress-0" style="width: 100%; margin: 20px 0px 0px; display: flex;">
                                                    <div class="progress-bar progress-bar-info progress-bar-striped" style="width: 100%;">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media_main_link_ach" style="display: none;">
                                    <input type="text" class="form-control" name="media_link" id="media_link" value="" placeholder="Link">
                                </div>
                            </div>
                            <div class="form-group ">
                              <div id="preview_img_list"><img src="https://lifevitaelive.com/storage/upload/achivements/2021-09-13-05-41-35509598.jpeg" style="width:50px; height: 30px;"></div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="row" style="margin: 1rem 3rem;">
                    <div class="col-lg-6">
                        <inout type="hidden" name="check_achievement_save_flag" value="0" id="check_achievement_save_flag">
                        <button type="submit" class="save_add_another" id="achievement_save_another" style="width: 100%;"><i class="fa fa-save icon_save"></i><i class="fa fa-plus icon_plus"></i> Save and add another</button>
                    </inout></div>
                    <div class="col-lg-6">
                        <button type="submit" class="save_add_publish" id="achievement_submit_form" style="width: 100%;"><i class="fa fa-save icon_save"></i> Save and publish</button>
                    </div>
                </div>
            </form>
                <div class="row" style="margin: 1rem 3rem;"></div>
            </div>
        </div>
    </div>
    <style>
             #life_passion_modal{
                display:none;
            }
            .strengths-widget{
                display:none;
            }
    </style>
    <div class="modal fade in" id="life_passion_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="padding-left: 5px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="passionfunction()">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-lg-9"></div>
                  <div class="col-lg-3">
                    <p id="hints-passion" style="color: #40C4C1;font-size: 15px;text-decoration: underline;cursor: pointer;text-align: center;border: 1px solid;padding: 5px;border-radius: 5px; font-weight: bold;text-decoration: none;" onclick="passionexample()">View Example</p>
                    <div style="clear: both;"></div>
                  </div>
                </div>
                <div class="col-lg-12">
                    <p class="welcome_headline">Add entry: LifePassion</p>
                    <p id="hints-achievementsssss" style="font-size: 13px; text-align: center; ">Edit content and include media when applicable</p>
                    <p class="sucess_message_text" style="display: none;color:green;">LifePassion saved successfully</p>
                    <p class="error_message_text" style="display: none; color:red;">something went wrong please try again later.</p>
                </div>
            </div>
            <form class="passion_form_class passion_form_class_save" id="lifepassion-form" method="POST" action="addpassion" novalidate="novalidate" enctype="multipart/form-data">
            @csrf
                <div class="row" style="margin: 1rem 3rem;">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Title*</label>
                            <input name="passion_title" id="life_event" placeholder="What is this about?" type="text" class="mid js_life_event form-control" maxlength="150" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Short description (max 250 characters)*</label>
                            <textarea rows="3" name="passion_description" autocomplete="off" cols="3" class="form-control mt-3 detail" placeholder="Write a brief summary" maxlength="250" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Category (what best describes your passion?)* <span data-tooltip="Once you’ve described your passion, select a category that best represents what your passion is about. For example, if you love to run, it would be under the 'Sport and Physical Activites' category." data-tooltip-location="top"><i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i></span></label>
                            <div class="js_category">
                                <input type="hidden" name="passion_category_id" id="passion_category_id" value="">
                                <select name="passion_category" id="category_lifepassions" onChange="passionstrengthdisplay()" class="form-control mb-3 lifepassions-select category">
                                    <option value="" data-id="">Category</option>
                                    <option value="1" data-id="1">Brain Power</option>
                                    <option value="2" data-id="2">Sport and Physical Activities</option>
                                    <option value="3" data-id="3">Social and Cultural Activities</option>
                                    <option value="4" data-id="4">Pursuit of Arts and Crafts</option>
                                    <option value="5" data-id="5">Caring for Others</option>
                                    <option value="6" data-id="6">Making the World a Better Place</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group signup-section">
                            <label class="control-label">LifeStrength (select one LifeStrength this passion reinforces)* </label>
                            <div class="lifepassion-strengths-box re-design">
                                <div class="pic-message js_error">
                                    <p class="js_error">Pick one strength.</p>
                                </div>
                                <div class="strengths-widget strengths-widget-1">
                                    <input type="radio" class="js_radio" value="Problem Solving" name="passion_strength" id="lifepassion-Problem Solving">
                                    <label for="lifepassion-Problem Solving" onclick=""><i class="hexa_strength"></i>Problem Solving</label>
                                </div>
                                <div class="strengths-widget strengths-widget-1">
                                    <input type="radio" class="js_radio" value="Decisiveness" name="passion_strength" id="lifepassion-Decisiveness">
                                    <label for="lifepassion-Decisiveness" onclick=""><i class="hexa_strength"></i>Decisiveness</label>
                                </div>
                                <div class="strengths-widget strengths-widget-1">
                                    <input type="radio" class="js_radio" value="Originality" name="passion_strength" id="lifepassion-Originality">
                                    <label for="lifepassion-Originality" onclick=""><i class="hexa_strength"></i>Originality</label>
                                </div>
                                <div class="strengths-widget strengths-widget-1">
                                    <input type="radio" class="js_radio" value="Simplifying the Complex" name="passion_strength" id="lifepassion-Simplifying the Complex">
                                    <label for="lifepassion-Simplifying the Complex" onclick=""><i class="hexa_strength"></i>Simplifying the Complex</label>
                                </div>
                                <div class="strengths-widget strengths-widget-1">
                                    <input type="radio" class="js_radio" value="Thinking ahead" name="passion_strength" id="lifepassion-Thinking ahead">
                                    <label for="lifepassion-Thinking ahead" onclick=""><i class="hexa_strength"></i>Thinking ahead</label>
                                </div>
                                <div class="strengths-widget strengths-widget-1">
                                    <input type="radio" class="js_radio" value="Sense Making" name="passion_strength" id="lifepassion-Sense Making">
                                    <label for="lifepassion-Sense Making" onclick=""><i class="hexa_strength"></i>Sense Making</label>
                                </div>
                                <div class="strengths-widget strengths-widget-2">
                                    <input type="radio" class="js_radio" value="Drive" name="passion_strength" id="lifepassion-Drive">
                                    <label for="lifepassion-Drive" onclick=""><i class="hexa_strength"></i>Drive</label>
                                </div>
                                <div class="strengths-widget strengths-widget-2">
                                    <input type="radio" class="js_radio" value="Confidence" name="passion_strength" id="lifepassion-Confidence">
                                    <label for="lifepassion-Confidence" onclick=""><i class="hexa_strength"></i>Confidence</label>
                                </div>
                                <div class="strengths-widget strengths-widget-2">
                                    <input type="radio" class="js_radio" value="Integrity" name="passion_strength" id="lifepassion-Integrity">
                                    <label for="lifepassion-Integrity" onclick=""><i class="hexa_strength"></i>Integrity</label>
                                </div>
                                <div class="strengths-widget strengths-widget-2">
                                    <input type="radio" class="js_radio" value="Dependability" name="passion_strength" id="lifepassion-Dependability">
                                    <label for="lifepassion-Dependability" onclick=""><i class="hexa_strength"></i>Dependability</label>
                                </div>
                                <div class="strengths-widget strengths-widget-2">
                                    <input type="radio" class="js_radio" value="Objectivity" name="passion_strength" id="lifepassion-Objectivity">
                                    <label for="lifepassion-Objectivity" onclick=""><i class="hexa_strength"></i>Objectivity</label>
                                </div>
                                <div class="strengths-widget strengths-widget-3">
                                    <input type="radio" class="js_radio" value="Engagement" name="passion_strength" id="lifepassion-Engagement">
                                    <label for="lifepassion-Engagement" onclick=""><i class="hexa_strength"></i>Engagement</label>
                                </div>
                                <div class="strengths-widget strengths-widget-3">
                                    <input type="radio" class="js_radio" value="Diplomacy" name="passion_strength" id="lifepassion-Diplomacy">
                                    <label for="lifepassion-Diplomacy" onclick=""><i class="hexa_strength"></i>Diplomacy</label>
                                </div>
                                <div class="strengths-widget strengths-widget-3">
                                    <input type="radio" class="js_radio" value="Eloquence" name="passion_strength" id="lifepassion-Eloquence">
                                    <label for="lifepassion-Eloquence" onclick=""><i class="hexa_strength"></i>Eloquence</label>
                                </div>
                                <div class="strengths-widget strengths-widget-3">
                                    <input type="radio" class="js_radio" value="Social Flexibility" name="passion_strength" id="lifepassion-Social Flexibility">
                                    <label for="lifepassion-Social Flexibility" onclick=""><i class="hexa_strength"></i>Social Flexibility</label>
                                </div>
                                <div class="strengths-widget strengths-widget-3">
                                    <input type="radio" class="js_radio" value="Being Persuasive" name="passion_strength" id="lifepassion-Being Persuasive">
                                    <label for="lifepassion-Being Persuasive" onclick=""><i class="hexa_strength"></i>Being Persuasive</label>
                                </div>
                                <div class="strengths-widget strengths-widget-4">
                                    <input type="radio" class="js_radio" value="Curiosity" name="passion_strength" id="lifepassion-Curiosity">
                                    <label for="lifepassion-Curiosity" onclick=""><i class="hexa_strength"></i>Curiosity</label>
                                </div>
                                <div class="strengths-widget strengths-widget-4">
                                    <input type="radio" class="js_radio" value="Taking Risk" name="passion_strength" id="lifepassion-Taking Risk">
                                    <label for="lifepassion-Taking Risk" onclick=""><i class="hexa_strength"></i>Taking Risk</label>
                                </div>
                                <div class="strengths-widget strengths-widget-4">
                                    <input type="radio" class="js_radio" value="Entrepreneurship" name="passion_strength" id="lifepassion-Entrepreneurship">
                                    <label for="lifepassion-Entrepreneurship" onclick=""><i class="hexa_strength"></i>Entrepreneurship</label>
                                </div>
                                <div class="strengths-widget strengths-widget-4">
                                    <input type="radio" class="js_radio" value="Pioneering" name="passion_strength" id="lifepassion-Pioneering">
                                    <label for="lifepassion-Pioneering" onclick=""><i class="hexa_strength"></i>Pioneering</label>
                                </div>
                                <div class="strengths-widget strengths-widget-4">
                                    <input type="radio" class="js_radio" value="Challenging the Norm" name="passion_strength" id="lifepassion-Challenging the Norm">
                                    <label for="lifepassion-Challenging the Norm" onclick=""><i class="hexa_strength"></i>Challenging the Norm</label>
                                </div>
                                <div class="strengths-widget strengths-widget-5">
                                    <input type="radio" class="js_radio" value="Empathy" name="passion_strength" id="lifepassion-Empathy">
                                    <label for="lifepassion-Empathy" onclick=""><i class="hexa_strength"></i>Empathy</label>
                                </div>
                                <div class="strengths-widget strengths-widget-5">
                                    <input type="radio" class="js_radio" value="Self Awareness" name="passion_strength" id="lifepassion-Self Awareness">
                                    <label for="lifepassion-Self Awareness" onclick=""><i class="hexa_strength"></i>Self Awareness</label>
                                </div>
                                <div class="strengths-widget strengths-widget-5">
                                    <input type="radio" class="js_radio" value="Calmness" name="passion_strength" id="lifepassion-Calmness">
                                    <label for="lifepassion-Calmness" onclick=""><i class="hexa_strength"></i>Calmness</label>
                                </div>
                                <div class="strengths-widget strengths-widget-5">
                                    <input type="radio" class="js_radio" value="Trust" name="passion_strength" id="lifepassion-Trust">
                                    <label for="lifepassion-Trust" onclick=""><i class="hexa_strength"></i>Trust</label>
                                </div>
                                <div class="strengths-widget strengths-widget-5">
                                    <input type="radio" class="js_radio" value="Patience" name="passion_strength" id="lifepassion-Patience">
                                    <label for="lifepassion-Patience" onclick=""><i class="hexa_strength"></i>Patience</label>
                                </div>
                                <div class="strengths-widget">
                                    <input type="radio" class="js_radio strengths-widget-5" value="Gratitude" name="passion_strength" id="lifepassion-Gratitude">
                                    <label for="lifepassion-Gratitude" onclick=""><i class="hexa_strength"></i>Gratitude</label>
                                </div>
                                <div class="strengths-widget strengths-widget-5">
                                    <input type="radio" class="js_radio" value="Compassion" name="passion_strength" id="lifepassion-Compassion">
                                    <label for="lifepassion-Compassion" onclick=""><i class="hexa_strength"></i>Compassion</label>
                                </div>
                                <div class="strengths-widget strengths-widget-6">
                                    <input type="radio" class="js_radio" value="Resilience" name="passion_strength" id="lifepassion-Resilience">
                                    <label for="lifepassion-Resilience" onclick=""><i class="hexa_strength"></i>Resilience</label>
                                </div>
                                <div class="strengths-widget strengths-widget-6">
                                    <input type="radio" class="js_radio" value="Dealing with Adversity" name="passion_strength" id="lifepassion-Dealing with Adversity">
                                    <label for="lifepassion-Dealing with Adversity" onclick=""><i class="hexa_strength"></i>Dealing with Adversity</label>
                                </div>
                                <div class="strengths-widget strengths-widget-6">
                                    <input type="radio" class="js_radio" value="Self Discipline" name="passion_strength" id="lifepassion-Self Discipline">
                                    <label for="lifepassion-Self Discipline" onclick=""><i class="hexa_strength"></i>Self Discipline</label>
                                </div>
                                <div class="strengths-widget strengths-widget-6">
                                    <input type="radio" class="js_radio" value="Persistence" name="passion_strength" id="lifepassion-Persistence">
                                    <label for="lifepassion-Persistence" onclick=""><i class="hexa_strength"></i>Persistence</label>
                                </div>
                                <div class="strengths-widget strengths-widget-6">
                                    <input type="radio" class="js_radio" value="Humility" name="passion_strength" id="lifepassion-Humility">
                                    <label for="lifepassion-Humility" onclick=""><i class="hexa_strength"></i>Humility</label>
                                </div>
                                <div class="strengths-widget strengths-widget-6">
                                    <input type="radio" class="js_radio" value="Agility" name="passion_strength" id="lifepassion-Agility">
                                    <label for="lifepassion-Agility" onclick=""><i class="hexa_strength"></i>Agility</label>
                                </div>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div class="strength_error_msg" style="display: none;color: #ec0404c2;"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group ">
                            <div class="signup-section" style="padding-bottom: 10px;">
                                <label class="control-label">Upload media (images, videos, links and/or recordings)</label>
                                <div class="life-tools mb-2">
                                    <div class="life-media" onclick="imageurlfunction('media_main_pas')">
                                        <input type="radio" value="image" name="passion_media_type" id="picture_010" class="picture" checked="">
                                        <label for="picture_010"><i class="fa fa-upload"></i></label>
                                    </div>
                                    <div class="life-media" style="display: none;">
                                        <input type="radio" value="video" name="passion_media_type" id="audio_010" class="audio">
                                        <label for="audio_010"><i class="fa fa-file-video-o"></i></label>
                                    </div>
                                    <div class="life-media" style="display: none;">
                                        <input type="radio" value="audio" name="passion_media_type" id="link_010" class="link">
                                        <label for="link_010"><i class="fa fa-music"></i> &nbsp;</label>
                                    </div>
                                    <div class="life-media" onclick="imageurlfunction('media_main_link_pas')">
                                        <input type="radio" value="link" name="passion_media_type" id="video_010" class="video">
                                        <label for="video_010"><i class="fa fa-link"></i></label>
                                    </div>
                                </div>
                                <input type="hidden" name="image_media_type_passion" id="image_media_type_passion" value="">
                                <input type="hidden" name="image_name" id="passion_image" value="">
                                <input type="hidden" name="main_dropzone_number" id="main_dropzone_number" value="1">
                                <input type="hidden" name="main_dropzone_number_flag_passion" id="main_dropzone_number_flag_passion" value="0">
                            </div>
                            <div class="col-lg-12">
                              <div id="extra_form"><input type="hidden" value=""></div>
                            </div>
                            <div class="form-group ">
                                <div class="media_main_pas">
                                    <div id="main_dropzone_1">
                                        <div class="nniicc-dropzoneParent" style="margin: 0px;">
                                            <div class="dropzone" style="width: 300px; height: 100px; border: 2px dashed rgb(204, 204, 204); color: rgb(204, 204, 204); text-align: center; -webkit-box-align: center; -webkit-box-pack: center; z-index: 100; cursor: pointer;">
                                                <input type="file" name="files_passion" multiple="" style="display: none;" id="fileElem" onchange="handleFiles1(this.files_passion)" accept="audio/*|video/*|image/*|"/>
                                                <label class="button" for="fileElem" style="color:black;">Select some files</label>
                                                Drag and drop your file or browse your folders
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p style="font-size: 10px;margin-bottom: 2px;">*Optimal image size is 210px by 130px</p>
                                <p style="font-size: 10px;margin-bottom: 2px;">*Maximum file size is 5MB</p>
                                <p style="font-size: 10px;">*we are accepting only "jpg", "jpeg", "png", "mp3", "wav", "mov", "avi", "mp4" file formats.</p>
                                <p style="font-size: 13px;color: red;display: none;" id="ach_dropzone_msg"></p>
                                <div class="media_main_link_pas" style="display: none;">
                                    <input type="text" class="form-control" name="media_link" id="media_link" value="" placeholder="Link">
                                </div>
                            </div>
                            <div class="form-group ">
                                <progress id="progress-bar_1" max=100 value=0 style="display:none;"></progress>
                                <div id="preview_img_list_1"></div>
                                <div id="gallery_1"></div>
                            </div>
                            <input type="hidden" name="privacy_private" value="1">
                            <input type="hidden" name="privacy_everyone" value="1">
                            <input type="hidden" name="privacy_recruiters" value="1">
                            <input type="hidden" name="privacy_network" value="0">
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 1rem 3rem;">
                    <div class="col-lg-6">
                        <input type="hidden" name="save_check_achievement" id="save_check_achievement" value="0">
                        <button type="submit" class="save_add_another" id="passion_submit_form_another" style="width: 100%;"><i class="fa fa-save icon_save"></i><i class="fa fa-plus icon_plus"></i> Save and add another</button>
                    </div>
                    <div class="col-lg-6">
                        <button type="submit" class="save_add_publish" id="passion_submit_form" style="width: 100%;"><i class="fa fa-save icon_save"></i> Save and publish</button>
                    </div>
                </div>
            </form>
            <div class="row" style="margin: 1rem 3rem;"></div>
        </div>
    </div>
    </div>
    <style>
        #life_moment_modal{
            display:none;
        }
        .que_Family{
            display:block;
        }
        .que_Challenges{
            display:none;
        }
        .que_Interests{
            display:none;
        }
        .que_Leadership{
            display:none;
        }
        .que_Motivation{
            display:none;
        }
        .que_Experience{
            display:none;
        }
        .que_Community{
            display:none;
        }
        .que_all{
            display:none;
        }
    </style>
    <div class="modal fade in" id="life_moment_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="padding-left: 5px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="momentfunction()">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <p class="welcome_headline">Add / Edit Entry: LifeMoment</p>
                    <p class="sucess_message_text" style="display: none; color:green;">LifeMoment(s) saved successfully</p>
                    <p class="error_message_text" style="display: none;color:red;">something went wrong please try again later.</p>
                </div>
            </div>
            <ul class="que-nav" id="que-nav">
              <li><a class="que-item active-item" onclick="pickerfunction('que_Family')" data-id="Family">Family</a></li>
              <li><a class="que-item " data-id="Challenges" onclick="pickerfunction('que_Challenges')">Challenges</a></li>
              <li><a class="que-item" data-id="Interests" onclick="pickerfunction('que_Interests')">Interests</a></li>
              <li><a class="que-item" data-id="Leadership" onclick="pickerfunction('que_Leadership')">Leadership</a></li>
              <li><a class="que-item" data-id="Motivation" onclick="pickerfunction('que_Motivation')">Motivation</a></li>
              <li><a class="que-item" data-id="Experience" onclick="pickerfunction('que_Experience')">Experience</a></li>
              <li><a class="que-item" data-id="Community" onclick="pickerfunction('que_Community')">Community</a></li>
            </ul>
            <form id="lifemoment-form" action="" method="">
                @csrf
                    <div class="row" style="margin: 0.5rem 2rem; height: 500px; overflow: auto;justify-content: unset !important;">
                        <div class="col-lg-4 que_all  que_Family que_Challenges que_Experience">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_0">When I recovered from a major setback?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[1]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[1]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                            <span class="del" id="1" onclick="document.getElementById('answer_1').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="1">
                                                <textarea id="answer_1" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==1) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Leadership que_Motivation que_Community">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_1">When I motivated others to action?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[2]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[2]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                            <span class="del" id="2" onclick="document.getElementById('answer_2').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="2">
                                            <textarea id="answer_2" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==2) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Family que_Challenges que_Experience">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_2">When I made a tough choice and had to bear the consequence?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[3]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[3]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                        <span class="del" id="3" onclick="document.getElementById('answer_3').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="3">
                                            <textarea id="answer_3" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==3) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Challenges que_Experience">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_3">When I stepped outside my comfort zone?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[4]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[4]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                            <span class="del" id="4" onclick="document.getElementById('answer_4').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="4">
                                                <textarea id="answer_4" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==4) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Family que_Challenges que_Motivation que_Experience">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_4">When I achieved something no one believed I could?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[5]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[5]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                        <span class="del" id="5" onclick="document.getElementById('answer_5').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="5">
                                             <textarea id="answer_5" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==5) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Experience que_Family que_Leadership">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_5">When I questioned the status quo and made change happen?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[6]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[6]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                            <span class="del" id="6" onclick="document.getElementById('answer_6').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="6">
                                                <textarea id="answer_6" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==6) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Challenges que_Experience que_Interests">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_6">When I challenged and changed my own beliefs?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[7]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[7]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                            <span class="del" id="7" onclick="document.getElementById('answer_7').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="7">
                                            <textarea id="answer_7" name="answer[]" class=""> @foreach($Answers as $moments) @if($moments['question_id']==7) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Motivation que_Experience que_Challenge">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_7">When I risked something to create something?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[8]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[8]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                         <span class="del" id="8" onclick="document.getElementById('answer_8').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="8">
                                                <textarea id="answer_8" name="answer[]" class=""> @foreach($Answers as $moments) @if($moments['question_id']==8) {{$moments['answer']}} @endif @endforeach </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Challenge que_Experience">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_8">When I did  something that had never been done before?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[9]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[9]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                        <span class="del" id="9" onclick="document.getElementById('answer_9').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="9">
                                            <textarea id="answer_9" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==9) {{$moments['answer']}} @endif @endforeach </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Experience que_Challenge">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_9">When I questioned authority and took the heat?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[10]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[10]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                        <span class="del" id="10" onclick="document.getElementById('answer_10').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="10">
                                            <textarea id="answer_10" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==10) {{$moments['answer']}} @endif @endforeach </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Community que_Family que_Experience">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_10">When someone changed my life forever?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[11]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[11]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                            <span class="del" id="11" onclick="document.getElementById('answer_11').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="11">
                                            <textarea id="answer_11" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==11) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Community que_Leadership. Motivation">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_11">When I brought people together to achieve something meaningful?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[12]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[12]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                            <span class="del" id="12" onclick="document.getElementById('answer_12').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="12">
                                            <textarea id="answer_12" name="answer[]" class=""> @foreach($Answers as $moments) @if($moments['question_id']==12) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Family que_Community">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_12">When I lost someone close to me?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[13]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[13]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                            <span class="del" id="13" onclick="document.getElementById('answer_13').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="13">
                                            <textarea id="answer_13" name="answer[]" class=""> @foreach($Answers as $moments) @if($moments['question_id']==13) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Motivation que_Community que_Leadership">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_13">When I contributed to or started a movement that matters?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[14]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[14]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                            <span class="del" id="14" onclick="document.getElementById('answer_14').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="14">
                                            <textarea id="answer_14" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==14) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Community que_Interests que_Motivation">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_14">When I chose to forego my ego to serve others?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[15]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[15]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                        <span class="del" id="15" onclick="document.getElementById('answer_15').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="15">
                                            <textarea id="answer_15" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==15) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Challenge que_Motivation que_Experience">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_15">When I solved a complex problem with many dimensions?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[16]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[16]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                        <span class="del" id="16" onclick="document.getElementById('answer_16').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="16">
                                            <textarea id="answer_16" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==16) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Community que_Leadership que_Motivation">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_16">When I changed the direction of a team or organization?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[17]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[17]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                        <span class="del" id="17" onclick="document.getElementById('answer_17').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="17">
                                            <textarea id="answer_17" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==17) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Family que_Interests que_Motivation">
                                <div class="life-moments">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_17">When I brought a concept to life?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[18]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[18]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                        <span class="del" id="18"onclick="document.getElementById('answer_18').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="18">
                                            <textarea id="answer_18" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==18) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Experience que_Challenge que_Interests">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_18">When I organized or managed a complicated event or program?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[19]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[19]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                        <span class="del" id="19" onclick="document.getElementById('answer_19').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="19">
                                                <textarea id="answer_19" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==19) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 que_all  que_Community que_Leadership que_Experience">
                                <div class="life-moments  ">
                                    <div class="life-moment__question">
                                        <div class="life-moment__question-text" id="question_id_19">When I led or managed a team of experts?</div>
                                    </div>
                                    <div>
                                      <div style="width: 60%; float: left;">
                                        <p style="float: left; margin-right: 5px;margin-top: 4px;">Public : </p>
                                        <input type="hidden" name="privacy_public[20]" value="0">
                                        <div class="private_switch">
                                            <label class="switch">
                                                <input type="checkbox" name="privacy_public[20]" class="privacy_details_network_22" value="1" checked="&quot;checked&quot;"><span class="slider round"></span>
                                            </label>
                                        </div>
                                      </div>
                                      <div class="text-right" style="width: 40%; float: left;">
                                        <span class="del" id="20" onclick="document.getElementById('answer_20').value = ''">Delete</span>
                                      </div>
                                      <div style="clear: both;"></div>
                                    </div>
                                    <div class="app-textarea">
                                        <div class="app-textarea__wrap">
                                            <input type="hidden" name="question_id[]" value="20">
                                                <textarea id="answer_20" name="answer[]" class="">@foreach($Answers as $moments) @if($moments['question_id']==20) {{$moments['answer']}} @endif @endforeach</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 1rem 3rem;">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <button type="submit" class="save_add_publish" id="submit_lifemoment" style="width: 100%;"><i class="fa fa-save icon_save"></i> Save</button>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                    </form>
                <div class="row" style="margin: 1rem 3rem;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade in" id="hints-achievements-data" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Example</h5>
                    <button type="button" class="close" data-dismiss="modal" id="hints_close" aria-label="Close">
                        <span aria-hidden="true" onclick="achievementexample()">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="profile_outerline achievements_overview_outerlinee">
                            <div class="row">
                                <div class="col-lg-12 achievements_image_icon">
                                    <div class="achievements_icon">Curricular <i style="margin: 0 10px;" class="fa fa-trophy"></i></div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="passion_title">Final Exams in Grade 8</div>
                                    <div class="achievements_title_category">Academic Achievement</div>
                                    <div class="achievements_subtitle">8th Standard</div>
                                    <div class="achievements_desc">Topped the class in mathematics</div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="passion_stregnth stregnth_red" style="color: #2d5597">
                                        <svg class="Polygon_62_ks" viewBox="0 0 15.75 14" style="width: 15px; height: 15px; margin-top: -5px;">
                                            <path fill="#2d5597" id="Polygon_62_ks" d="M 10.64280319213867 0 C 11.3653507232666 0 12.03171825408936 0.3897235691547394 12.38595581054688 1.019477605819702 L 15.19845485687256 6.019476413726807 C 15.54092025756836 6.628304004669189 15.54092025756836 7.371695041656494 15.19845485687256 7.980522155761719 L 12.38595581054688 12.98052215576172 C 12.03171825408936 13.610276222229 11.3653507232666 13.99999904632568 10.64280319213867 13.99999904632568 L 5.107193946838379 13.99999904632568 C 4.384647846221924 13.99999904632568 3.718279838562012 13.610276222229 3.364043235778809 12.98052215576172 L 0.5515440106391907 7.980521678924561 C 0.2090787589550018 7.371694564819336 0.2090788334608078 6.628303527832031 0.5515442490577698 6.019475936889648 L 3.364044427871704 1.019477248191833 C 3.718281269073486 0.3897233903408051 4.38464879989624 0 5.107195854187012 0 Z">
                                            </path>
                                        </svg>
                                        <b>Problem Solving</b> (Cognitive)
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <p style="float: right; margin: 10px 0;">&nbsp;<span class="lifeachievement_edit" data-id="3819" style="display: none;"><i class="fa fa-pencil" aria-hidden="true"></i></span></p>
                                </div>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade in" id="hints-passion-data" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style=>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Example</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" onclick="passionexample()">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-605236">
                        <div class="profile_outerline profile_outerline_overview">
                        <div class="passion_title">Dance</div>
                        <div class="achievements_title_category">Sport and Physical Activities</div>
                        <div class="passion_desc">I discovered my love for dance, especially a classical Indian dance form known as Kathak. Even though it is tiring, I find it very relaxing.</div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="passion_stregnth" style="color: #c00000">
                                        <svg class="Polygon_62_ks" viewBox="0 0 15.75 14" style="width: 15px; height: 15px; margin-top: -5px;">
                                            <path fill="#c00000" id="Polygon_62_ks" d="M 10.64280319213867 0 C 11.3653507232666 0 12.03171825408936 0.3897235691547394 12.38595581054688 1.019477605819702 L 15.19845485687256 6.019476413726807 C 15.54092025756836 6.628304004669189 15.54092025756836 7.371695041656494 15.19845485687256 7.980522155761719 L 12.38595581054688 12.98052215576172 C 12.03171825408936 13.610276222229 11.3653507232666 13.99999904632568 10.64280319213867 13.99999904632568 L 5.107193946838379 13.99999904632568 C 4.384647846221924 13.99999904632568 3.718279838562012 13.610276222229 3.364043235778809 12.98052215576172 L 0.5515440106391907 7.980521678924561 C 0.2090787589550018 7.371694564819336 0.2090788334608078 6.628303527832031 0.5515442490577698 6.019475936889648 L 3.364044427871704 1.019477248191833 C 3.718281269073486 0.3897233903408051 4.38464879989624 0 5.107195854187012 0 Z">
                                            </path>
                                        </svg>
                                        <b>Drive</b> (Motive)
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <p style="float: right; margin: 10px 0;">&nbsp;<span class="lifepassion_edit" data-id="4169" style="display: none;"><i class="fa fa-pencil" aria-hidden="true"></i></span></p>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade in" id="life_line_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display:none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" onclick="lifeline()">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8"></div>
                        <div class="col-lg-4">
                            <p id="hints" style="color: #40C4C1; font-size: 12px; text-decoration: underline; cursor: pointer; text-align: right;" onclick="lineexample()">View Example</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <p class="welcome_headline">Add Entry: LifeLine</p>
                        <p class="sucess_message_text" style="display: none;color:green;">LifeEvent saved successfully</p>
                        <p class="error_message_text" style="display: none;color:red;">something went wrong please try again later.</p>
                    </div>
                </div>
                <form id="lifeline-form" action="" method="POST" novalidate="novalidate">
                @csrf
                    <div class="row" style="margin: 1rem 3rem;">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input name="life_event" id="life_event" placeholder="Add a high or low point in your life. Keep it short!" type="text" class="mid js_life_event_line form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                    <div class="row" style="margin: 0rem 3rem 1rem 3rem;">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="control-label">Standard*</label>
                                <div class="js_category">
                                    <select name="standard" id="standard_lifeline" data-id="0" class="form-control mb-3 Standard">
                                        <option value="" data-id="">Standard</option>
                                        <option value="<6">&lt; 6th</option>
                                        <option value="6">6th</option>
                                        <option value="7">7th</option>
                                        <option value="8">8th</option>
                                        <option value="9">9th</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                    <div class="row" style="margin: 1rem 3rem;">
                        <div class="col-lg-6">
                            <input type="hidden" name="add_another" id="save_another_flag" value="0">
                            <div class="save_add_another" id="save_add_another_lifeline"><i class="fa fa-save icon_save"></i><i class="fa fa-plus icon_plus"></i> Save and add another</div>
                        </div>
                        <div class="col-lg-6">
                            <button type="submt" class="save_add_publish" style="width: 100%;"><i class="fa fa-save icon_save"></i> Save and publish</button>
                        </div>
                    </div>
                </form>
                <div class="row" style="margin: 1rem 3rem;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade in" id="hints-data" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display:none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Suggestions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" onclick="lineexample()">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <ul class="suggest-list">
                            <li>Received a scholarship</li>
                            <li>Worked on a special project</li>
                            <li>Aced at a school test</li>
                            <li>Won a competiton</li>
                            <li>Moved to a new city/ country</li>
                            <li>Struggled with illness</li>
                            <li>Learnt a new hobby/skill</li>
                            <li>Scored excellent marks in academics</li>
                            <li>A proud moment</li>
                            <li>Taken a new course of study</li>
                            <li>A low moment</li>
                            <li>Peer support</li>
                            <li>Faced failure</li>
                            <li>Won an award</li>
                            <li>Lost my job</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade in" id="life_line_modal_edit" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none; padding-right: 5px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" onclick="lifelineclose()">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <p class="welcome_headline">Edit info: LifeLine</p>
                        <p class="sucess_message_text" style="display: none; color:green;">LifeEvent saved successfully</p>
                        <p class="error_message_text" style="display: none;color:red">Something went wrong please try again later.</p>
                    </div>
                </div>
                <div id="life_line_modal_edit_section">
                </div>
                <div class="row" style="margin: 1rem 3rem;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade in" id="life_achievements_modal_edit" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none; padding-right: 5px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="achievementclose()">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <p class="welcome_headline">Edit info: LifeAchievement</p>
                        <p id="hints-achievementsssss" style="font-size: 13px; text-align: center;">Edit content and include media when applicable</p>
                        <p class="sucess_message_text" style="display: none; color:green;">LifeAchievement saved successfully</p>
                        <p class="error_message_text" style="display: none; color:red;">something went wrong please try again later.</p>
                    </div>
                </div>
                <div id="life_achievements_modal_edit_section"></div>
                <div class="row" style="margin: 1rem 3rem;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade in" id="life_passion_modal_edit" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display:none; padding-right: 5px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="passioneditfunction()">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <p class="welcome_headline">Edit info: LifePassion</p>
                        <p id="hints-achievementsssss" style="font-size: 13px; text-align: center; ">Edit content and include media when applicable</p>
                        <p class="sucess_message_text" style="display: none; color:green;">LifePassion Updated successfully</p>
                        <p class="error_message_text" style="display: none;color:red;">Something went wrong please try again later.</p>
                    </div>
                </div>
                <div id="life_passion_modal_edit_section"></div>
                <div class="row" style="margin: 1rem 3rem;"></div>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script>
    function lifelineclose()
    {
        document.getElementById('life_line_modal_edit').style.display='none';
    }
</script>
    <!-- LifeLineEdit-->
    <script type="text/javascript">
        function lifelineedit(x)
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
            url: "{{route('GetLifeLinehtml')}}",
            method:'POST',
            data:{
                id:x
            },
            success:function(response){
                if(response.success){
                    $("#life_line_modal_edit").show();
                    $("#life_line_modal_edit_section").html(response.htmltext);
                }
                else
                {
                    alert("Something Went Wrong. Please Try Again Later");
                }
            },
            error:function(error){
                console.log(error)
            }
            });
        }
    </script>
    <!-- Update Life Line-->
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click','#lifeline-form-edit .save_add_publish',function(e){
                e.preventDefault();
                $.ajax({
                    url:"{{route('updatelifeline')}}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method:'POST',
                    data:$("#lifeline-form-edit").serialize(),
                    success:function(response){
                        if(response.success){
                            $("#lifeline_timeline").html(response.htmltext);
                            console.log(response.htmltext);
                            $("#lifeline-form-edit")[0].reset();
                            $("#life_line_modal_edit .sucess_message_text").show();
                            $("#life_line_modal_edit .error_message_text").hide();
                            $("#refresh_task_reload").show();
                            setTimeout(function() {
                                $("#life_line_modal_edit .sucess_message_text").hide();
                                $("#life_line_modal_edit .error_message_text").hide();
                                $('#life_line_modal_edit').hide();
                            }, 2000);
                        }
                        else
                        {
                            $("#lifeline-form-edit")[0].reset();
                            $("#life_line_modal_edit .sucess_message_text").hide();
                            $("#life_line_modal_edit .error_message_text").html(response.error);
                            console.log(response.error);
                            $("#life_line_modal_edit .error_message_text").show();
                            setTimeout(function() {
                                $("#life_line_modal_edit .sucess_message_text").hide();
                                $("#life_line_modal_edit .error_message_text").hide();
                            }, 2000);
                        }
                    },
                    error:function(error){
                        console.log(error)
                    }
                });
            });
        });
    </script>
    <!-- ADD Life Line -->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#lifeline-form .save_add_publish").click(function(e){
            e.preventDefault();
            var title = $("input[name=life_event]").val();
            var x=document.getElementById('standard_lifeline').selectedOptions[0].value;
            var details = x;
            $.ajax({
            url:"{{route('addlifeline')}}",
            method:'POST',
            data:{
                    life_event:title,
                    standard:details
                },
            success:function(response){
                if(response.success){
                    $("#lifeline_timeline").html(response.htmltext);
                    $("#lifeline-form")[0].reset();
                    $("#life_line_modal .sucess_message_text").show();
                    $("#life_line_modal .error_message_text").hide();
                    $("#refresh_task_reload").show();
                    setTimeout(function() {
                        $("#life_line_modal .sucess_message_text").hide();
                        $("#life_line_modal .error_message_text").hide();
                        $('#life_line_modal').hide();
                    }, 2000);
                }
                else
                {
                    $("#lifeline-form-edit")[0].reset();
                    $("#life_line_modal .sucess_message_text").hide();
                    $("#life_line_modal .error_message_text").html(response.error);
                    $("#life_line_modal .error_message_text").show();
                    setTimeout(function() {
                        $("#life_line_modal .sucess_message_text").hide();
                        $("#life_line_modal .error_message_text").hide();
                    }, 2000);
                }
            },
            error:function(error){
                console.log(error)
            }
            });
        });
    </script>
    <!-- Edit LifeAchievement-->
    <script type="text/javascript">
        function lifeachievementedit(x)
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
            url: "{{route('GetLifeAchievementhtml')}}",
            method:'POST',
            data:{
                id:x
            },
            success:function(response){
                if(response.success){
                    $("#life_achievements_modal_edit").show();
                    $("#life_achievements_modal_edit_section").html(response.htmltext);
                }
                else
                {
                    alert("Something Went Wrong. Please Try Again Later");
                }
            },
            error:function(error){
                console.log(error)
            }
            });
        }
    </script>
    <!-- Update Life Achievement-->
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click','#lifeachievement-form-edit .save_add_publish',function(e){
                e.preventDefault();
                $.ajax({
                    url:"{{route('updatelifeachievement')}}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method:'POST',
                    data:$("#lifeachievement-form-edit").serialize(),
                    success:function(response){
                        if(response.success){
                            $("#achievements_main_outerlinee").html(response.htmltext);
                            console.log(response.htmltext);
                            $("#lifeachievement-form-edit")[0].reset();
                            $("#life_achievements_modal_edit .sucess_message_text").show();
                            $("#life_achievements_modal_edit .error_message_text").hide();
                            $("#refresh_task_reload").show();
                            setTimeout(function() {
                                $("#life_achievements_modal_edit .sucess_message_text").hide();
                                $("#life_achievements_modal_edit .error_message_text").hide();
                                $('#life_achievements_modal_edit').hide();
                            }, 2000);
                        }
                        else
                        {
                            $("#life_achievements_modal_edit .sucess_message_text").hide();
                            $("#life_achievements_modal_edit .error_message_text").html(response.error);
                            console.log(response.error);
                            $("#life_achievements_modal_edit .error_message_text").show();
                            setTimeout(function() {
                                $("#life_achievements_modal_edit .sucess_message_text").hide();
                                $("#life_achievements_modal_edit .error_message_text").hide();
                            }, 2000);
                        }
                    },
                    error:function(error){
                        console.log(error)
                    }
                });
            });
        });
    </script>
    <!-- Add Life Achievement-->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#lifeachievement-form .save_add_publish").click(function(e){
            e.preventDefault();
            $.ajax({
            url:"{{route('addachievement')}}",
            method:'POST',
            data:$("#lifeachievement-form").serialize(),
            success:function(response){
                if(response.success){
                    $("#achievements_main_outerlinee").html(response.htmltext);
                    $("#lifeachievement-form")[0].reset();
                    $("#life_achievements_modal .sucess_message_text").show();
                    $("#life_achievements_modal .error_message_text").hide();
                    console.log(response.htmltext);
                    $("#refresh_task_reload").show();
                    setTimeout(function() {
                        $("#life_achievements_modal .sucess_message_text").hide();
                        $("#life_achievements_modal .error_message_text").hide();
                        $('#life_achievements_modal').hide();
                    }, 2000);
                }
                else
                {
                    $("#life_achievements_modal .sucess_message_text").hide();
                    $("#life_achievements_modal .error_message_text").html(response.error);
                    $("#life_achievements_modal .error_message_text").show();
                    setTimeout(function() {
                        $("#life_achievements_modal .sucess_message_text").hide();
                        $("#life_achievements_modal .error_message_text").hide();
                    }, 2000);
                }
            },
            error:function(error){
                console.log(error)
            }
            });
        });
    </script>
    <!-- Edit LifePassion-->
    <script type="text/javascript">
        function lifepassionedit(x)
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
            url: "{{route('GetLifePassionhtml')}}",
            method:'POST',
            data:{
                id:x
            },
            success:function(response){
                if(response.success){
                    $("#life_passion_modal_edit").show();
                    $("#life_passion_modal_edit_section").html(response.htmltext);
                }
                else
                {
                    alert("Something Went Wrong. Please Try Again Later");
                }
            },
            error:function(error){
                console.log(error)
            }
            });
        }
    </script>
    <!-- Update Life Passion-->
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click','#lifepassion-form-edit .save_add_publish',function(e){
                e.preventDefault();
                $.ajax({
                    url:"{{route('updatelifepassion')}}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method:'POST',
                    data:$("#lifepassion-form-edit").serialize(),
                    success:function(response){
                        if(response.success){
                            $("#passion_main_outerline").html(response.htmltext);
                            console.log(response.htmltext);
                            $("#lifepassion-form-edit")[0].reset();
                            $("#life_passion_modal_edit .sucess_message_text").show();
                            $("#life_passion_modal_edit .error_message_text").hide();
                            $("#refresh_task_reload").show();
                            setTimeout(function() {
                                $("#life_passion_modal_edit .sucess_message_text").hide();
                                $("#life_passion_modal_edit .error_message_text").hide();
                                $('#life_passion_modal_edit').hide();
                            }, 2000);
                        }
                        else
                        {
                            $("#life_passion_modal_edit .sucess_message_text").hide();
                            $("#life_passion_modal_edit .error_message_text").html(response.error);
                            console.log(response.error);
                            $("#life_passion_modal_edit .error_message_text").show();
                            setTimeout(function() {
                                $("#life_passion_modal_edit .sucess_message_text").hide();
                                $("#life_passion_modal_edit .error_message_text").hide();
                            }, 2000);
                        }
                    },
                    error:function(error){
                        console.log(error)
                    }
                });
            });
        });
    </script>
    <!-- Add Life Passion-->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#lifepassion-form .save_add_publish").click(function(e){
            e.preventDefault();
            $.ajax({
            url:"{{route('addpassion')}}",
            method:'POST',
            data:$("#lifepassion-form").serialize(),
            success:function(response){
                if(response.success){
                    $("#passion_main_outerline").html(response.htmltext);
                    $("#lifepassion-form")[0].reset();
                    $("#life_passion_modal .sucess_message_text").show();
                    $("#life_passion_modal .error_message_text").hide();
                    console.log(response.htmltext);
                    $("#refresh_task_reload").show();
                    setTimeout(function() {
                        $("#life_passion_modal .sucess_message_text").hide();
                        $("#life_passion_modal .error_message_text").hide();
                        $('#life_passion_modal').hide();
                    }, 2000);
                }
                else
                {
                    $("#life_passion_modal .sucess_message_text").hide();
                    $("#life_passion_modal .error_message_text").html(response.error);
                    $("#life_passion_modal .error_message_text").show();
                    setTimeout(function() {
                        $("#life_passion_modal .sucess_message_text").hide();
                        $("#life_passion_modal .error_message_text").hide();
                    }, 2000);
                }
            },
            error:function(error){
                console.log(error)
            }
            });
        });
    </script>
    <!-- Add/Edit Life Moments-->
    <script>
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#lifemoment-form .save_add_publish").click(function(e){
            e.preventDefault();
            $.ajax({
            url:"{{route('addmoment')}}",
            method:'POST',
            data:$("#lifemoment-form").serialize(),
            success:function(response){
                if(response.success){
                    $("#life_moments").html(response.htmltext);
                    $("#lifemoment-form")[0].reset();
                    $("#life_moment_modal .sucess_message_text").show();
                    $("#life_moment_modal .error_message_text").hide();
                    console.log(response.htmltext);
                    $("#refresh_task_reload").show();
                    setTimeout(function() {
                        $("#life_moment_modal .sucess_message_text").hide();
                        $("#life_moment_modal .error_message_text").hide();
                        $('#life_moment_modal').hide();
                    }, 2000);
                }
                else
                {
                    $("#life_moment_modal .sucess_message_text").hide();
                    $("#life_moment_modal .error_message_text").html(response.error);
                    $("#life_moment_modal .error_message_text").show();
                    console.log(response.error);
                    setTimeout(function() {
                        $("#life_moment_modal .sucess_message_text").hide();
                        $("#life_moment_modal .error_message_text").hide();
                    }, 2000);
                }
            },
            error:function(error){
                console.log(error)
            }
            });
        });
    </script>
    <!-- Add functions-->
    <script>
            function myfunction() {
                    if(document.getElementById('life_achievements_modal').style.display=="none" || document.getElementById('life_achievements_modal').style.display=="")
                    {
                        document.getElementById('life_achievements_modal').style.display="block";
                    }
                    else
                    {
                        document.getElementById('life_achievements_modal').style.display="none";
                    }
            }
            function passionfunction() {
                    if(document.getElementById('life_passion_modal').style.display=="none" || document.getElementById('life_passion_modal').style.display=="")
                    {
                        document.getElementById('life_passion_modal').style.display="block";
                    }
                    else
                    {
                        document.getElementById('life_passion_modal').style.display="none";
                    }
            }
            function momentfunction() {
                    if(document.getElementById('life_moment_modal').style.display=="none"|| document.getElementById('life_moment_modal').style.display=="")
                    {
                        document.getElementById('life_moment_modal').style.display="block";
                        var elems=document.getElementsByClassName('que_Family');
                        for (var i=0;i<elems.length;i+=1){
                            elems[i].style.display = 'block';
                        }
                    }
                    else
                    {
                        document.getElementById('life_moment_modal').style.display="none";
                    }
            }
            function pickerfunction(x)
            {
                    var elem=document.getElementsByClassName('que_all');
                    for (var i=0;i<elem.length;i+=1){
                        elem[i].style.display = 'none';
                    }
                    var elems=document.getElementsByClassName(x);
                    for (var i=0;i<elems.length;i+=1){
                        elems[i].style.display = 'block';
                    }
                    var header = document.getElementById("que-nav");
                    var btns = header.getElementsByClassName("que-item");
                    for (var i = 0; i < btns.length; i++)
                    {
                        btns[i].addEventListener("click", function() {
                        var current = document.getElementsByClassName("active-item");
                        current[0].className = current[0].className.replace(" active-item", "");
                        this.className += " active-item";
                        });
                    }
            }
            function achievementexample()
            {
                if(document.getElementById('hints-achievements-data').style.display=="none" || document.getElementById('hints-achievements-data').style.display=="")
                {
                    document.getElementById('hints-achievements-data').style.display="block";
                }
                else
                {
                    document.getElementById('hints-achievements-data').style.display="none";
                }
            }
            function passionexample()
            {
                if(document.getElementById('hints-passion-data').style.display=="none" || document.getElementById('hints-passion-data').style.display=="")
                {
                    document.getElementById('hints-passion-data').style.display="block";
                }
                else
                {
                    document.getElementById('hints-passion-data').style.display="none";
                }
            }
            function LifeStrengths()
            {
                if(document.getElementById('life_strengths_modal').style.display=="none"||document.getElementById('life_strengths_modal').style.display=="")
                {
                    document.getElementById('life_strengths_modal').style.display="block";
                }
                else
                {
                    document.getElementById('life_strengths_modal').style.display="none";
                }
            }
            function wishlistfunction(x,y)
            {
                    var elem=document.getElementsByClassName('b_a_i');
                    for (var i=0;i<elem.length;i+=1){
                        elem[i].style.display = 'none';
                    }
                    var elems=document.getElementsByClassName(x);
                    for (var i=0;i<elems.length;i+=1){
                        elems[i].style.display = 'block';
                    }
                    var current = document.getElementsByClassName("active");
                    for (var i=0;i<=current.length;i+=1){
                        current[i].classList.remove("active");
                    }
                    var header = document.getElementsByClassName(y);
                    header[0].className +=" active";
            }
            function imageurlfunction(x)
            {
                if(x==='media_main_link_pas')
                {
                    var elem=document.getElementsByClassName('media_main_link_pas');
                    elem[0].style.display="block";
                    var elem=document.getElementsByClassName('media_main_pas');
                    elem[0].style.display='none';
                }
                else
                {
                    var elem=document.getElementsByClassName('media_main_pas');
                    elem[0].style.display="block";
                    var elem=document.getElementsByClassName('media_main_link_pas');
                    elem[0].style.display='none';
                }
            }
            function imageurlachfunction(x)
            {
                if(x==='media_main_link_ach')
                {
                    var elem=document.getElementsByClassName('media_main_link_ach');
                    elem[0].style.display="block";
                    var elem=document.getElementsByClassName('media_main_ach');
                    elem[0].style.display='none';
                }
                else
                {
                    var elem=document.getElementsByClassName('media_main_ach');
                    elem[0].style.display="block";
                    var elem=document.getElementsByClassName('media_main_link_ach');
                    elem[0].style.display='none';
                }
            }
            function categoryfunction(x)
            {
                if(x==1)
                {
                    document.getElementById('category_categories_professional').style.display='block';
                    document.getElementById('category_categories_personal').style.display='none';
                    var elem=document.getElementsByClassName('strengths-widget');
                    for (var i=0;i<elem.length;i+=1){
                        elem[i].style.display = 'none';
                    }
                }
                else
                {
                    document.getElementById('category_categories_personal').style.display='block';
                    document.getElementById('category_categories_professional').style.display='none';
                    var elem=document.getElementsByClassName('strengths-widget');
                    for (var i=0;i<elem.length;i+=1){
                        elem[i].style.display = 'none';
                    }
                }
            }
            function lineexample()
            {
                if(document.getElementById('hints-data').style.display=="none" || document.getElementById('hints-data').style.display=="")
                {
                    document.getElementById('hints-data').style.display="block";
                }
                else
                {
                    document.getElementById('hints-data').style.display="none";
                }
            }
            function lifeline()
            {
                if(document.getElementById('life_line_modal').style.display=="none"||document.getElementById('life_line_modal').style.display=="")
                {
                    document.getElementById('life_line_modal').style.display="block";
                }
                else
                {
                    document.getElementById('life_line_modal').style.display="none";
                }
            }
            function strengthdisplay(x)
            {
                var y=document.getElementById(x).value;
                var str1='strength-widget-';
                var x=str1.concat(y);
                var elem=document.getElementsByClassName('strengths-widget');
                for (var i=0;i<elem.length;i+=1){
                    elem[i].style.display = 'none';
                }
                var elems=document.getElementsByClassName(x);
                for (var i=0;i<elems.length;i+=1){
                    elems[i].style.display = 'block';
                }
            }
            function passionstrengthdisplay()
            {
                var y=document.getElementById('category_lifepassions').value;
                var str1='strengths-widget-';
                var x=str1.concat(y);
                var elem=document.getElementsByClassName('strengths-widget');
                for (var i=0;i<elem.length;i+=1){
                    elem[i].style.display = 'none';
                }
                var elems=document.getElementsByClassName(x);
                for (var i=0;i<elems.length;i+=1){
                    elems[i].style.display = 'block';
                }
            }
    </script>
    <!-- edit functions-->
    <script>
            function achievementclose() {
                    if(document.getElementById('life_achievements_modal_edit').style.display=="none" || document.getElementById('life_achievements_modal_edit').style.display=="")
                    {
                        document.getElementById('life_achievements_modal_edit').style.display="block";
                    }
                    else
                    {
                        document.getElementById('life_achievements_modal_edit').style.display="none";
                        var elem=document.getElementsByClassName('strengths-widget');
                        for (var i=0;i<elem.length;i+=1){
                            elem[i].style.display = 'none';
                        }
                    }
            }
            function passioneditfunction() {
                    if(document.getElementById('life_passion_modal_edit').style.display=="none" || document.getElementById('life_passion_modal_edit').style.display=="")
                    {
                        document.getElementById('life_passion_modal_edit').style.display="block";
                    }
                    else
                    {
                        document.getElementById('life_passion_modal_edit').style.display="none";
                        var elem=document.getElementsByClassName('strengths-widget');
                        for (var i=0;i<elem.length;i+=1){
                            elem[i].style.display = 'none';
                        }
                    }
            }
            function imageurlpaseditfunction(x)
            {
                if(x==='media_main_link_pas_edit')
                {
                    var elem=document.getElementsByClassName('media_main_link_pas_edit');
                    elem[0].style.display="block";
                    var elem=document.getElementsByClassName('media_main_pas_edit');
                    elem[0].style.display='none';
                }
                else
                {
                    var elem=document.getElementsByClassName('media_main_pas_edit');
                    elem[0].style.display="block";
                    var elem=document.getElementsByClassName('media_main_link_pas_edit');
                    elem[0].style.display='none';
                }
            }
            function imageurlachedit(x)
            {
                if(x==='media_main_link_ach_edit')
                {
                    var elem=document.getElementsByClassName('media_main_link_ach_edit');
                    elem[0].style.display="block";
                    var elem=document.getElementsByClassName('media_main_ach_edit');
                    elem[0].style.display='none';
                }
                else
                {
                    var elem=document.getElementsByClassName('media_main_ach_edit');
                    elem[0].style.display="block";
                    var elem=document.getElementsByClassName('media_main_link_ach_edit');
                    elem[0].style.display='none';
                }
            }
            function categoryeditfunction(x)
            {
                if(x==1)
                {
                    document.getElementById('category_categories_professional_edit').style.display='block';
                    document.getElementById('category_categories_personal_edit').style.display='none';
                    var elem=document.getElementsByClassName('strengths-widget');
                    for (var i=0;i<elem.length;i+=1){
                        elem[i].style.display = 'none';
                    }
                }
                else
                {
                    document.getElementById('category_categories_personal_edit').style.display='block';
                    document.getElementById('category_categories_professional_edit').style.display='none';
                    var elem=document.getElementsByClassName('strengths-widget');
                    for (var i=0;i<elem.length;i+=1){
                        elem[i].style.display = 'none';
                    }
                }
            }
            function strengtheditdisplay(x)
            {
                var y=document.getElementById(x).value;
                var str1='strength-widget-';
                var x=str1.concat(y);
                var elem=document.getElementsByClassName('strengths-widget');
                for (var i=0;i<elem.length;i+=1){
                    elem[i].style.display = 'none';
                }
                var elems=document.getElementsByClassName(x);
                for (var i=0;i<elems.length;i+=1){
                    elems[i].style.display = 'block';
                }
            }
            function passionstrengtheditdisplay()
            {
                var y=document.getElementById('category_lifepassions_edit').value;
                var str1='strengths-widget-';
                var x=str1.concat(y);
                var elem=document.getElementsByClassName('strengths-widget');
                for (var i=0;i<elem.length;i+=1){
                    elem[i].style.display = 'none';
                }
                var elems=document.getElementsByClassName(x);
                for (var i=0;i<elems.length;i+=1){
                    elems[i].style.display = 'block';
                }
            }
    </script>
<!-- Life Strength Counter-->
    <script>
        var limit = 10;
        var x=document.getElementsByName('life_str[]');
        var checked=0;
        var y=0;
        for(y=0;y<x.length;y++)
        {
            if(x[y].checked==true)
            {
                checked++;
            }
        }
        $('.strength-check').on('change', function() {
        if($(this).is(':checked'))
            checked = checked+1;

        if($(this).is(':checked') == false)
            checked = checked-1;

        if(checked > limit) {
            this.checked = false;
            window.alert("Please select only 10 LifeStrengths");
            checked = limit;
        }
        });
    </script>
<!-- Life Achievement Dropzone-->
    <script>
            let dropArea = document.getElementById("main_dropzone");
// Prevent default drag behaviors
;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, preventDefaults, false)
  document.body.addEventListener(eventName, preventDefaults, false)
})
// Highlight drop area when item is dragged over it
;['dragenter', 'dragover'].forEach(eventName => {
  dropArea.addEventListener(eventName, highlight, false)
})
;['dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, unhighlight, false)
})
// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false)
function preventDefaults (e) {
  e.preventDefault();
  e.stopPropagation();
}
function highlight(e) {
  dropArea.classList.add('highlight');
}
function unhighlight(e) {
  dropArea.classList.remove('active');
}
function handleDrop(e) {
  var dt = e.dataTransfer;
  var files = dt.files;
  handleFiles(files);
}
let uploadProgress = [];
let progressBar = document.getElementById('progress-bar');
function initializeProgress(numFiles) {
  progressBar.value = 0;
  uploadProgress = [];
  for(let i = numFiles; i > 0; i--) {
    document.getElementById('progress-bar').style.display='block';
    uploadProgress.push(0);
  }
}
function updateProgress(fileNumber, percent) {
  uploadProgress[fileNumber] = percent;
  let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length;
  console.debug('update', fileNumber, percent, total);
  progressBar.value = total;
}
function handleFiles(files) {
  console.log(files[0]);
  files = [...files];
  initializeProgress(files.length);
  files.forEach(uploadFile);
  files.forEach(previewFile);
}
function previewFile(file) {
  let reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onloadend = function() {
    let img = document.createElement('img')
    img.src = reader.result
    var k=document.getElementById('gallery');
    while(k.firstChild) {
        k.removeChild(k.firstChild);
    }
    document.getElementById('gallery').appendChild(img)
  };
}
function uploadFile(file, i) {
  var url = 'https://api.cloudinary.com/v1_1/joezimim007/image/upload';
  var xhr = new XMLHttpRequest();
  var formData = new FormData();
  xhr.open('POST', url, true);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

  // Update progress (can be used to show progress indicator)
  xhr.upload.addEventListener("progress", function(e) {
    updateProgress(i, (e.loaded * 100.0 / e.total) || 100);
  })

  xhr.addEventListener('readystatechange', function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      updateProgress(i, 100) // <- Add this
    }
    else if (xhr.readyState == 4 && xhr.status != 200) {
      // Error. Inform the user
    }
  })

  formData.append('upload_preset', 'ujpu6gyk')
  formData.append('file', file)
  xhr.send(formData)
}
    </script>
<!-- Life Passion Dropzone-->
    <script>
            let dropArea1 = document.getElementById("main_dropzone_1");
// Prevent default drag behaviors
;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  dropArea1.addEventListener(eventName, preventDefaults, false)
  document.body.addEventListener(eventName, preventDefaults, false)
})
// Highlight drop area when item is dragged over it
;['dragenter', 'dragover'].forEach(eventName => {
  dropArea1.addEventListener(eventName, highlight1, false)
})
;['dragleave', 'drop'].forEach(eventName => {
  dropArea1.addEventListener(eventName, unhighlight1, false)
})
// Handle dropped files
dropArea1.addEventListener('drop', handleDrop1, false)
function preventDefaults (e) {
  e.preventDefault();
//   e.stopPropagation();
}
function highlight1(e) {
  dropArea1.classList.add('highlight');
}
function unhighlight1(e) {
  dropArea1.classList.remove('active');
}
function handleDrop1(e) {
  let dt = e.dataTransfer;
  let files = dt.files;
  handleFiles1(files);
}
let uploadProgress1 = [];
let progressBar1 = document.getElementById('progress-bar_1');
function initializeProgress1(numFiles) {
  progressBar1.value = 0;
  uploadProgress1 = [];
  for(let i = numFiles; i > 0; i--) {
    document.getElementById('progress-bar_1').style.display='block';
    uploadProgress1.push(0);
  }
}
function updateProgress1(fileNumber, percent) {
  uploadProgress1[fileNumber] = percent;
  let total = uploadProgress1.reduce((tot, curr) => tot + curr, 0) / uploadProgress1.length;
  console.debug('update', fileNumber, percent, total);
  progressBar1.value = total;
}
function handleFiles1(files) {
  files = [...files];
  initializeProgress1(files.length);
  files.forEach(uploadFile1);
  files.forEach(previewFile1);
}
function previewFile1(file) {
  let reader1 = new FileReader();
  reader1.readAsDataURL(file);
  reader1.onloadend = function() {
    let img = document.createElement('img')
    img.src = reader1.result
    let k1=document.getElementById('gallery_1');
    while(k1.firstChild) {
        k1.removeChild(k1.firstChild);
    }
    document.getElementById('gallery_1').appendChild(img)
  };
}
function uploadFile1(file, i) {
  let url1 = 'https://api.cloudinary.com/v1_1/joezimim007/image/upload';
  let xhr1 = new XMLHttpRequest();
  let formData1 = new FormData();
  xhr1.open('POST', url1, true);
  xhr1.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

  // Update progress (can be used to show progress indicator)
  xhr1.upload.addEventListener("progress", function(e) {
    updateProgress1(i, (e.loaded * 100.0 / e.total) || 100);
  })

  xhr1.addEventListener('readystatechange', function(e) {
    if (xhr1.readyState == 4 && xhr1.status == 200) {
      updateProgress1(i, 100) // <- Add this
    }
    else if (xhr1.readyState == 4 && xhr1.status != 200) {
      // Error. Inform the user
    }
  })

  formData1.append('upload_preset', 'ujpu6gyk')
  formData1.append('file', file)
  xhr1.send(formData1)
}
    </script>
    </body>
</html>
