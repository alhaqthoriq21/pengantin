<?php

namespace App\Helper;


class Constants
{

    /* konstanta Calon */
    public const CALON_STATUS_ENABLE = 1; /* ENABLE */
    public const CALON_STATUS_DISABLE = 0; /* DISABLE */

    public static function calonStatusDesc($CALON_STATUS)
    {
        switch ($CALON_STATUS) {
            case self::CALON_STATUS_ENABLE:
                return "Enable";
            case self::CALON_STATUS_DISABLE:
                return "Disable";
            default:
                return "Unknow";
        }
    }

    public const calonStatusArray = [
        self::CALON_STATUS_ENABLE => "Enable",
        self::CALON_STATUS_DISABLE => "Disable",
    ];

    /* konstanta Quotes */
    public const QUOTES_STATUS_ENABLE = 1; /* ENABLE */
    public const QUOTES_STATUS_DISABLE = 0; /* DISABLE */

    public static function quotesStatusDesc($QUOTES_STATUS)
    {
        switch ($QUOTES_STATUS) {
            case self::QUOTES_STATUS_ENABLE:
                return "Enable";
            case self::QUOTES_STATUS_DISABLE:
                return "Disable";
            default:
                return "Unknow";
        }
    }

    public const quotesStatusArray = [
        self::QUOTES_STATUS_ENABLE => "Enable",
        self::QUOTES_STATUS_DISABLE => "Disable",
    ];

     /* konstanta Akad Nikah */
    public const AKAD_NIKAH_STATUS_ENABLE = 1; /* ENABLE */
    public const AKAD_NIKAH_STATUS_DISABLE = 0; /* DISABLE */

    public static function akadNikahStatusDesc($AKAD_NIKAH_STATUS)
    {
        switch ($AKAD_NIKAH_STATUS) {
            case self::AKAD_NIKAH_STATUS_ENABLE:
                return "Enable";
            case self::AKAD_NIKAH_STATUS_DISABLE:
                return "Disable";
            default:
                return "Unknow";
        }
    }

    public const akadNikahStatusArray = [
        self::AKAD_NIKAH_STATUS_ENABLE => "Enable",
        self::AKAD_NIKAH_STATUS_DISABLE => "Disable",
    ];

    /* konstanta Resepsi */
    public const RESEPSI_STATUS_ENABLE = 1; /* ENABLE */
    public const RESEPSI_STATUS_DISABLE = 0; /* DISABLE */

    public static function resepsiStatusDesc($RESEPSI_STATUS)
    {
        switch ($RESEPSI_STATUS) {
            case self::RESEPSI_STATUS_ENABLE:
                return "Enable";
            case self::RESEPSI_STATUS_DISABLE:
                return "Disable";
            default:
                return "Unknow";
        }
    }

    public const resepsiStatusArray = [
        self::RESEPSI_STATUS_ENABLE => "Enable",
        self::RESEPSI_STATUS_DISABLE => "Disable",
    ];

     /* konstanta Comment */
    public const COMMENT_STATUS_ENABLE = 1; /* ENABLE */
    public const COMMENT_STATUS_DISABLE = 0; /* DISABLE */

    public static function commentStatusDesc($COMMENT_STATUS)
    {
        switch ($COMMENT_STATUS) {
            case self::COMMENT_STATUS_ENABLE:
                return "Enable";
            case self::COMMENT_STATUS_DISABLE:
                return "Disable";
            default:
                return "Unknow";
        }
    }

    public const commentStatusArray = [
        self::COMMENT_STATUS_ENABLE => "Enable",
        self::COMMENT_STATUS_DISABLE => "Disable",
    ];

    /* konstanta Reservasi */
    public const RESERVASI_STATUS_ENABLE = 1; /* ENABLE */
    public const RESERVASI_STATUS_DISABLE = 0; /* DISABLE */

    public static function reservasiStatusDesc($RESERVASI_STATUS)
    {
        switch ($RESERVASI_STATUS) {
            case self::RESERVASI_STATUS_ENABLE:
                return "Enable";
            case self::RESERVASI_STATUS_DISABLE:
                return "Disable";
            default:
                return "Unknow";
        }
    }

    public const reservasiStatusArray = [
        self::RESERVASI_STATUS_ENABLE => "Enable",
        self::RESERVASI_STATUS_DISABLE => "Disable",
    ];

     /* konstanta Foto Header */
    public const FOTO_HEADER_STATUS_ENABLE = 1; /* ENABLE */
    public const FOTO_HEADER_STATUS_DISABLE = 0; /* DISABLE */

    public static function fotoHeaderStatusDesc($FOTO_HEADER_STATUS)
    {
        switch ($FOTO_HEADER_STATUS) {
            case self::FOTO_HEADER_STATUS_ENABLE:
                return "Enable";
            case self::FOTO_HEADER_STATUS_DISABLE:
                return "Disable";
            default:
                return "Unknow";
        }
    }

    public const fotoHeaderStatusArray = [
        self::FOTO_HEADER_STATUS_ENABLE => "Enable",
        self::FOTO_HEADER_STATUS_DISABLE => "Disable",
    ];

     /* konstanta Foto Body */
    public const FOTO_BODY_STATUS_ENABLE = 1; /* ENABLE */
    public const FOTO_BODY_STATUS_DISABLE = 0; /* DISABLE */

    public static function fotoBodyStatusDesc($FOTO_BODY_STATUS)
    {
        switch ($FOTO_BODY_STATUS) {
            case self::FOTO_BODY_STATUS_ENABLE:
                return "Enable";
            case self::FOTO_BODY_STATUS_DISABLE:
                return "Disable";
            default:
                return "Unknow";
        }
    }

    public const fotoBodyStatusArray = [
        self::FOTO_BODY_STATUS_ENABLE => "Enable",
        self::FOTO_BODY_STATUS_DISABLE => "Disable",
    ];

    /* konstanta Foto Footer */
    public const FOTO_FOOTER_STATUS_ENABLE = 1; /* ENABLE */
    public const FOTO_FOOTER_STATUS_DISABLE = 0; /* DISABLE */

    public static function fotoFooterStatusDesc($FOTO_FOOTER_STATUS)
    {
        switch ($FOTO_FOOTER_STATUS) {
            case self::FOTO_FOOTER_STATUS_ENABLE:
                return "Enable";
            case self::FOTO_FOOTER_STATUS_DISABLE:
                return "Disable";
            default:
                return "Unknow";
        }
    }

    public const fotoFooterStatusArray = [
        self::FOTO_FOOTER_STATUS_ENABLE => "Enable",
        self::FOTO_FOOTER_STATUS_DISABLE => "Disable",
    ];

     /* konstanta Love Story */
    public const LOVE_STORY_STATUS_ENABLE = 1; /* ENABLE */
    public const LOVE_STORY_STATUS_DISABLE = 0; /* DISABLE */

    public static function loveStoryStatusDesc($LOVE_STORY_STATUS)
    {
        switch ($LOVE_STORY_STATUS) {
            case self::LOVE_STORY_STATUS_ENABLE:
                return "Enable";
            case self::LOVE_STORY_STATUS_DISABLE:
                return "Disable";
            default:
                return "Unknow";
        }
    }

    public const loveStoryStatusArray = [
        self::LOVE_STORY_STATUS_ENABLE => "Enable",
        self::LOVE_STORY_STATUS_DISABLE => "Disable",
    ];

    /* konstanta Song */
    public const SONG_STATUS_ENABLE = 1; /* ENABLE */
    public const SONG_STATUS_DISABLE = 0; /* DISABLE */

    public static function songStatusDesc($SONG_STATUS)
    {
        switch ($SONG_STATUS) {
            case self::SONG_STATUS_ENABLE:
                return "Enable";
            case self::SONG_STATUS_DISABLE:
                return "Disable";
            default:
                return "Unknow";
        }
    }

    public const songStatusArray = [
        self::SONG_STATUS_ENABLE => "Enable",
        self::SONG_STATUS_DISABLE => "Disable",
    ];



}