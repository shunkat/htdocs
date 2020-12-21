--
-- PostgreSQL database cluster dump
--

\connect postgres

SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET escape_string_warning = 'off';

--
-- Roles
--

CREATE ROLE "admin";
ALTER ROLE "admin" WITH SUPERUSER INHERIT CREATEROLE CREATEDB LOGIN PASSWORD 'md5edbe6490a9afbc7d94458ac6f7acc706';
CREATE ROLE postgres;
ALTER ROLE postgres WITH SUPERUSER INHERIT CREATEROLE CREATEDB LOGIN PASSWORD 'md5915e74a3fe615eef84ab5ff697f29134';
CREATE ROLE "tokoton-navi";
ALTER ROLE "tokoton-navi" WITH NOSUPERUSER NOINHERIT NOCREATEROLE CREATEDB LOGIN PASSWORD 'md5a89a8ed7e6156444b7467201af59c853' VALID UNTIL 'infinity';






--
-- Database creation
--

REVOKE ALL ON DATABASE template1 FROM PUBLIC;
REVOKE ALL ON DATABASE template1 FROM postgres;
GRANT ALL ON DATABASE template1 TO postgres;
GRANT CONNECT ON DATABASE template1 TO PUBLIC;
CREATE DATABASE "tokoton-navi" WITH TEMPLATE = template0 OWNER = "tokoton-navi" ENCODING = 'UTF8';


\connect postgres

--
-- PostgreSQL database dump
--

SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

--
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'Standard public schema';


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

\connect template1

--
-- PostgreSQL database dump
--

SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

--
-- Name: template1; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE template1 IS 'Default template database';


--
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'Standard public schema';


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

\connect "tokoton-navi"

--
-- PostgreSQL database dump
--

SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

--
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'Standard public schema';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: m_rate; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE m_rate (
    rate_id integer NOT NULL,
    rate_type character varying,
    rate_cntmin integer,
    rate_cntmax integer,
    rate_price integer
);


ALTER TABLE public.m_rate OWNER TO "tokoton-navi";

SET default_with_oids = true;

--
-- Name: t_manager_usedata; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_manager_usedata (
    ud_no integer NOT NULL,
    sid integer,
    ud_year character varying,
    ud_month character varying,
    ud_conversion_cnt integer,
    ud_access_cnt integer,
    ud_coupon_cnt integer,
    client_login_count integer DEFAULT 0
);


ALTER TABLE public.t_manager_usedata OWNER TO "tokoton-navi";

--
-- Name: t_shop_base; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_base (
    sid integer NOT NULL,
    sd_account character varying NOT NULL,
    sd_pwd character varying NOT NULL,
    sd_remind_mail character varying,
    sd_customer_nm character varying,
    sd_acc_state boolean DEFAULT true,
    sd_exam_state smallint DEFAULT 0,
    sd_open_state smallint DEFAULT 0,
    sd_tel_srvc boolean DEFAULT false,
    sd_mail_srvc boolean DEFAULT false,
    sd_start_m date DEFAULT now(),
    sd_end_m date,
    sd_regist_date timestamp without time zone DEFAULT now(),
    sd_last_login date,
    sd_memo character varying,
    sd_estimate_mail character varying,
    sd_info_mail character varying,
    sd_company_nm character varying,
    sd_tanto_nm character varying,
    sd_tanto_kana character varying,
    sd_company_tel character varying,
    sd_company_zip character varying,
    sd_company_address character varying,
    sd_shop_nm character varying,
    sd_open_chiku character varying,
    sd_shop_tel character varying,
    sd_shop_address character varying,
    sd_shop_access character varying,
    sd_shop_url character varying,
    sd_shop_open character varying,
    sd_shop_off character varying,
    sd_card character varying,
    sd_shop_rank smallint,
    sd_catch_copy character varying,
    sd_intro character varying,
    sd_small_img01 character varying,
    sd_small_img02 character varying,
    di_itm01_nm character varying,
    di_itm02_nm character varying,
    di_itm03_nm character varying,
    di_itm04_nm character varying,
    di_itm05_nm character varying,
    di_itm06_nm character varying,
    di_itm07_nm character varying,
    di_itm08_nm character varying,
    sd_charge_table character varying,
    sd_login_count integer,
    sd_shop_zip character varying,
    sd_regist_flag boolean DEFAULT false,
    sd_shop_memo character varying,
    sd_tanto_section character varying,
    sd_tanto_position character varying,
    sd_company_fax character varying,
    sd_last_update timestamp without time zone DEFAULT now(),
    sd_contract_shop character varying,
    sd_manage_a character varying,
    sd_manage_b character varying,
    sd_manage_c character varying,
    sd_manage_d character varying,
    sd_manage_e character varying,
    sd_manage_f character varying,
    sd_copy_lank character varying DEFAULT 'A'::character varying,
    sd_basic_charge integer,
    sd_point point
);


ALTER TABLE public.t_shop_base OWNER TO "tokoton-navi";

--
-- Name: bk0930_csv_month_price; Type: VIEW; Schema: public; Owner: tokoton-navi
--

CREATE VIEW bk0930_csv_month_price AS
    SELECT t1.sid, t1.sd_account, t1.sd_manage_a, t1.sd_manage_b, t1.sd_manage_c, t1.sd_manage_d, t1.sd_manage_e, t1.sd_manage_f, t1.sd_customer_nm, t2.ud_year, t2.ud_month, t2.ud_access_cnt, t2.ud_conversion_cnt, t1.sd_shop_rank, t3.rate_type, t3.rate_price, t1.sd_basic_charge, t1.sd_memo FROM ((t_shop_base t1 LEFT JOIN t_manager_usedata t2 USING (sid)) LEFT JOIN m_rate t3 ON ((((t2.ud_conversion_cnt >= t3.rate_cntmin) AND (t2.ud_conversion_cnt <= t3.rate_cntmax)) AND ((t1.sd_copy_lank)::text = (t3.rate_type)::text))));


ALTER TABLE public.bk0930_csv_month_price OWNER TO "tokoton-navi";

--
-- Name: bk_csv_month_price; Type: VIEW; Schema: public; Owner: tokoton-navi
--

CREATE VIEW bk_csv_month_price AS
    SELECT t1.sid, t1.sd_customer_nm, t2.ud_year, t2.ud_month, t2.ud_access_cnt, t2.ud_conversion_cnt, t3.rate_type, t3.rate_price FROM ((t_shop_base t1 LEFT JOIN t_manager_usedata t2 USING (sid)) LEFT JOIN m_rate t3 ON (((t2.ud_conversion_cnt >= t3.rate_cntmin) AND (t2.ud_conversion_cnt <= t3.rate_cntmax))));


ALTER TABLE public.bk_csv_month_price OWNER TO "tokoton-navi";

--
-- Name: m_region; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE m_region (
    region_id character varying NOT NULL,
    todoufuken_id character varying,
    sub_region_nm character varying,
    region_nm character varying
);


ALTER TABLE public.m_region OWNER TO "tokoton-navi";

--
-- Name: m_todoufuken; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE m_todoufuken (
    todoufuken_id character varying NOT NULL,
    area_id character varying,
    todoufuken_nm character varying
);


ALTER TABLE public.m_todoufuken OWNER TO "tokoton-navi";

--
-- Name: t_search_cache; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_search_cache (
    sid integer NOT NULL,
    search_data character varying
);


ALTER TABLE public.t_search_cache OWNER TO "tokoton-navi";

--
-- Name: t_shop_shopopsion; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_shopopsion (
    so_no integer NOT NULL,
    sid integer,
    shop_option_no integer
);


ALTER TABLE public.t_shop_shopopsion OWNER TO "tokoton-navi";

--
-- Name: bk_v_search_view; Type: VIEW; Schema: public; Owner: tokoton-navi
--

CREATE VIEW bk_v_search_view AS
    SELECT sb.sid, sb.sd_account, sb.sd_shop_nm, sb.sd_catch_copy, sb.sd_intro, sb.sd_shop_address, sb.sd_shop_access, sb.sd_shop_rank, sb.sd_last_update, mr.region_id, mr.todoufuken_id, mt.area_id, mt.todoufuken_nm, mr.region_nm, mr.sub_region_nm, sc.search_data, ssp.shop_option_no, sb.sd_exam_state FROM (((((t_shop_base sb LEFT JOIN t_shop_shopopsion ssp ON ((sb.sid = ssp.sid))) LEFT JOIN t_search_cache sc ON ((sb.sid = sc.sid))) LEFT JOIN (SELECT t_shop_shopopsion.sid, count(t_shop_shopopsion.sid) AS icon_count FROM t_shop_shopopsion GROUP BY t_shop_shopopsion.sid) icon ON ((sb.sid = icon.sid))) LEFT JOIN m_region mr ON (((sb.sd_open_chiku)::text = (mr.region_id)::text))) LEFT JOIN m_todoufuken mt ON (((mr.todoufuken_id)::text = (mt.todoufuken_id)::text))) WHERE (sb.sd_exam_state = 2::smallint) ORDER BY (sb.sd_shop_rank IS NULL), sb.sd_shop_rank DESC, sb.sd_last_update DESC;


ALTER TABLE public.bk_v_search_view OWNER TO "tokoton-navi";

--
-- Name: bkcsv_month_price; Type: VIEW; Schema: public; Owner: tokoton-navi
--

CREATE VIEW bkcsv_month_price AS
    SELECT t1.sid, t1.sd_account, t1.sd_manage_a, t1.sd_manage_b, t1.sd_manage_c, t1.sd_manage_d, t1.sd_manage_e, t1.sd_manage_f, t1.sd_customer_nm, t2.ud_year, t2.ud_month, t2.ud_access_cnt, t2.ud_conversion_cnt, t1.sd_shop_rank, t1.sd_basic_charge, t3.rate_type, t3.rate_price, t1.sd_memo FROM ((t_shop_base t1 LEFT JOIN t_manager_usedata t2 USING (sid)) LEFT JOIN m_rate t3 ON ((((t2.ud_conversion_cnt >= t3.rate_cntmin) AND (t2.ud_conversion_cnt <= t3.rate_cntmax)) AND ((t1.sd_copy_lank)::text = (t3.rate_type)::text))));


ALTER TABLE public.bkcsv_month_price OWNER TO "tokoton-navi";

--
-- Name: bkv_search_view; Type: VIEW; Schema: public; Owner: tokoton-navi
--

CREATE VIEW bkv_search_view AS
    SELECT sb.sid, sb.sd_account, sb.sd_shop_nm, sb.sd_catch_copy, sb.sd_intro, sb.sd_shop_address, sb.sd_shop_access, sb.sd_shop_rank, sb.sd_last_update, mr.region_id, mr.todoufuken_id, mt.area_id, mt.todoufuken_nm, mr.region_nm, mr.sub_region_nm, sc.search_data, ssp.shop_option_no, sb.sd_exam_state, icon.icon_count FROM (((((t_shop_base sb LEFT JOIN t_shop_shopopsion ssp ON ((sb.sid = ssp.sid))) LEFT JOIN t_search_cache sc ON ((sb.sid = sc.sid))) LEFT JOIN (SELECT t_shop_shopopsion.sid, count(t_shop_shopopsion.sid) AS icon_count FROM t_shop_shopopsion GROUP BY t_shop_shopopsion.sid) icon ON ((sb.sid = icon.sid))) LEFT JOIN m_region mr ON (((sb.sd_open_chiku)::text = (mr.region_id)::text))) LEFT JOIN m_todoufuken mt ON (((mr.todoufuken_id)::text = (mt.todoufuken_id)::text))) WHERE (sb.sd_exam_state = (2)::smallint) ORDER BY (sb.sd_shop_rank IS NULL), sb.sd_shop_rank DESC, sb.sd_last_update DESC;


ALTER TABLE public.bkv_search_view OWNER TO "tokoton-navi";

--
-- Name: csv_month_price; Type: VIEW; Schema: public; Owner: tokoton-navi
--

CREATE VIEW csv_month_price AS
    SELECT t1.sid, t1.sd_account, t1.sd_manage_a, t1.sd_manage_b, t1.sd_manage_c, t1.sd_manage_d, t1.sd_manage_e, t1.sd_manage_f, t1.sd_shop_nm, t1.sd_customer_nm, t1.sd_contract_shop, t2.ud_year, t2.ud_month, t2.client_login_count, t2.ud_access_cnt, t2.ud_conversion_cnt, t2.ud_coupon_cnt, t1.sd_shop_rank, t1.sd_basic_charge, t3.rate_type, t3.rate_price, t1.sd_memo FROM ((t_shop_base t1 LEFT JOIN t_manager_usedata t2 USING (sid)) LEFT JOIN m_rate t3 ON ((((t2.ud_conversion_cnt >= t3.rate_cntmin) AND (t2.ud_conversion_cnt <= t3.rate_cntmax)) AND ((t1.sd_copy_lank)::text = (t3.rate_type)::text))));


ALTER TABLE public.csv_month_price OWNER TO "tokoton-navi";

--
-- Name: m_area; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE m_area (
    area_id character varying NOT NULL,
    area_nm character varying
);


ALTER TABLE public.m_area OWNER TO "tokoton-navi";

--
-- Name: m_rate_rate_id_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE m_rate_rate_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.m_rate_rate_id_seq OWNER TO "tokoton-navi";

--
-- Name: m_rate_rate_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE m_rate_rate_id_seq OWNED BY m_rate.rate_id;


--
-- Name: t_manager_account; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_manager_account (
    admin_id integer NOT NULL,
    admin_name character varying NOT NULL,
    id character varying NOT NULL,
    pwd character varying NOT NULL,
    count integer DEFAULT 0,
    permission character varying,
    "time" timestamp without time zone DEFAULT now() NOT NULL,
    pwd_limit date
);


ALTER TABLE public.t_manager_account OWNER TO "tokoton-navi";

--
-- Name: t_manager_account_admin_id_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_manager_account_admin_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_manager_account_admin_id_seq OWNER TO "tokoton-navi";

--
-- Name: t_manager_account_admin_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_manager_account_admin_id_seq OWNED BY t_manager_account.admin_id;


--
-- Name: t_manager_info; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_manager_info (
    info_no integer NOT NULL,
    info_up_date date,
    info_index character varying,
    info_contents character varying,
    info_lastupdate timestamp without time zone DEFAULT now()
);


ALTER TABLE public.t_manager_info OWNER TO "tokoton-navi";

--
-- Name: t_manager_info_info_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_manager_info_info_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_manager_info_info_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_manager_info_info_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_manager_info_info_no_seq OWNED BY t_manager_info.info_no;


--
-- Name: t_manager_topics; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_manager_topics (
    top_no integer NOT NULL,
    top_up_date date,
    top_contents character varying,
    top_link character varying,
    top_lastupdate timestamp without time zone DEFAULT now()
);


ALTER TABLE public.t_manager_topics OWNER TO "tokoton-navi";

--
-- Name: t_manager_topics_top_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_manager_topics_top_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_manager_topics_top_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_manager_topics_top_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_manager_topics_top_no_seq OWNED BY t_manager_topics.top_no;


--
-- Name: t_manager_usedata_ud_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_manager_usedata_ud_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_manager_usedata_ud_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_manager_usedata_ud_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_manager_usedata_ud_no_seq OWNED BY t_manager_usedata.ud_no;


--
-- Name: t_shop_adoption; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_adoption (
    opt_no integer NOT NULL,
    sid integer,
    opt_name character varying,
    opt_price character varying,
    opt_contents character varying,
    opt_lastupdate timestamp without time zone DEFAULT now()
);


ALTER TABLE public.t_shop_adoption OWNER TO "tokoton-navi";

--
-- Name: t_shop_adoption_opt_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_adoption_opt_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_adoption_opt_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_adoption_opt_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_adoption_opt_no_seq OWNED BY t_shop_adoption.opt_no;


--
-- Name: t_shop_base_sid_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_base_sid_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_base_sid_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_base_sid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_base_sid_seq OWNED BY t_shop_base.sid;


--
-- Name: t_shop_campaign; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_campaign (
    cam_no integer NOT NULL,
    sid integer,
    cam_name character varying,
    cam_start_date character varying,
    cam_end_date character varying,
    cam_detail character varying,
    cam_open boolean DEFAULT false,
    cam_lastupdate timestamp without time zone DEFAULT now()
);


ALTER TABLE public.t_shop_campaign OWNER TO "tokoton-navi";

--
-- Name: t_shop_campaign_cam_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_campaign_cam_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_campaign_cam_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_campaign_cam_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_campaign_cam_no_seq OWNED BY t_shop_campaign.cam_no;


--
-- Name: t_shop_coupon; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_coupon (
    cou_no integer NOT NULL,
    sid integer,
    cou_open_state boolean DEFAULT false,
    cou_contents character varying,
    cou_limit_matter character varying,
    cou_limit_date date,
    cou_lastupdate timestamp without time zone DEFAULT now()
);


ALTER TABLE public.t_shop_coupon OWNER TO "tokoton-navi";

--
-- Name: t_shop_coupon_cou_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_coupon_cou_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_coupon_cou_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_coupon_cou_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_coupon_cou_no_seq OWNED BY t_shop_coupon.cou_no;


--
-- Name: t_shop_dscbase; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_dscbase (
    db_no integer NOT NULL,
    sid integer,
    db_menu_nm character varying,
    db_menu_detail character varying,
    db_last_update timestamp without time zone DEFAULT now(),
    db_sort integer
);


ALTER TABLE public.t_shop_dscbase OWNER TO "tokoton-navi";

--
-- Name: t_shop_dscbase_db_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_dscbase_db_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_dscbase_db_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_dscbase_db_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_dscbase_db_no_seq OWNED BY t_shop_dscbase.db_no;


--
-- Name: t_shop_dscdetail; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_dscdetail (
    dd_no integer NOT NULL,
    db_no integer,
    dd_level_no integer,
    dd_dsc_nm character varying,
    dd_dsc_price character varying
);


ALTER TABLE public.t_shop_dscdetail OWNER TO "tokoton-navi";

--
-- Name: t_shop_dscdetail_dd_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_dscdetail_dd_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_dscdetail_dd_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_dscdetail_dd_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_dscdetail_dd_no_seq OWNED BY t_shop_dscdetail.dd_no;


--
-- Name: t_shop_mailformat; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_mailformat (
    mail_no integer NOT NULL,
    sid integer,
    mail_subject character varying,
    mail_greeting character varying,
    mail_footer character varying,
    mail_lastupdate timestamp without time zone DEFAULT now()
);


ALTER TABLE public.t_shop_mailformat OWNER TO "tokoton-navi";

--
-- Name: t_shop_mailformat_mail_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_mailformat_mail_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_mailformat_mail_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_mailformat_mail_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_mailformat_mail_no_seq OWNED BY t_shop_mailformat.mail_no;


--
-- Name: t_shop_planbase; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_planbase (
    pb_no integer NOT NULL,
    sid integer,
    pb_plan_nm character varying,
    pb_chatch_copy character varying,
    pb_plan_contents character varying,
    pb_itm01_state boolean DEFAULT false,
    pb_itm02_state boolean DEFAULT false,
    pb_itm03_state boolean DEFAULT false,
    pb_itm04_state boolean DEFAULT false,
    pb_itm05_state boolean DEFAULT false,
    pb_itm06_state boolean DEFAULT false,
    pb_itm07_state boolean DEFAULT false,
    pb_itm08_state boolean DEFAULT false,
    pb_reccomend_flag boolean DEFAULT false,
    pb_last_update timestamp without time zone DEFAULT now()
);


ALTER TABLE public.t_shop_planbase OWNER TO "tokoton-navi";

--
-- Name: t_shop_planbase_pb_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_planbase_pb_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_planbase_pb_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_planbase_pb_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_planbase_pb_no_seq OWNED BY t_shop_planbase.pb_no;


--
-- Name: t_shop_plandetail; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_plandetail (
    pd_no integer NOT NULL,
    pb_no integer,
    sid integer,
    pd_car_kind smallint,
    pd_weight_tax integer,
    pd_insrnc_price integer,
    pd_stamp_price integer,
    pd_itm01_price integer,
    pd_itm02_price integer,
    pd_itm03_price integer,
    pd_itm04_price integer,
    pd_itm05_price integer,
    pd_itm06_price integer,
    pd_itm07_price integer,
    pd_itm08_price integer
);


ALTER TABLE public.t_shop_plandetail OWNER TO "tokoton-navi";

--
-- Name: t_shop_plandetail_pd_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_plandetail_pd_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_plandetail_pd_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_plandetail_pd_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_plandetail_pd_no_seq OWNED BY t_shop_plandetail.pd_no;


--
-- Name: t_shop_plandiscount; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_plandiscount (
    pdsc_no integer NOT NULL,
    pb_no integer,
    db_no integer,
    dd_level_no integer
);


ALTER TABLE public.t_shop_plandiscount OWNER TO "tokoton-navi";

--
-- Name: t_shop_plandiscount_pdsc_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_plandiscount_pdsc_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_plandiscount_pdsc_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_plandiscount_pdsc_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_plandiscount_pdsc_no_seq OWNED BY t_shop_plandiscount.pdsc_no;


--
-- Name: t_shop_service; Type: TABLE; Schema: public; Owner: tokoton-navi; Tablespace: 
--

CREATE TABLE t_shop_service (
    srv_no integer NOT NULL,
    sid integer,
    srv_name character varying,
    srv_contents character varying,
    srv_lastupdate timestamp without time zone DEFAULT now()
);


ALTER TABLE public.t_shop_service OWNER TO "tokoton-navi";

--
-- Name: t_shop_service_srv_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_service_srv_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_service_srv_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_service_srv_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_service_srv_no_seq OWNED BY t_shop_service.srv_no;


--
-- Name: t_shop_shopopsion_so_no_seq; Type: SEQUENCE; Schema: public; Owner: tokoton-navi
--

CREATE SEQUENCE t_shop_shopopsion_so_no_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.t_shop_shopopsion_so_no_seq OWNER TO "tokoton-navi";

--
-- Name: t_shop_shopopsion_so_no_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tokoton-navi
--

ALTER SEQUENCE t_shop_shopopsion_so_no_seq OWNED BY t_shop_shopopsion.so_no;


--
-- Name: v_search_view; Type: VIEW; Schema: public; Owner: tokoton-navi
--

CREATE VIEW v_search_view AS
    SELECT sb.sid, sb.sd_account, sb.sd_shop_nm, sb.sd_catch_copy, sb.sd_intro, sb.sd_shop_address, sb.sd_shop_access, sb.sd_shop_rank, sb.sd_last_update, mr.region_id, mr.todoufuken_id, mt.area_id, mt.todoufuken_nm, mr.region_nm, mr.sub_region_nm, sc.search_data, ssp.shop_option_no, sb.sd_exam_state, icon.icon_count FROM (((((t_shop_base sb LEFT JOIN t_shop_shopopsion ssp ON ((sb.sid = ssp.sid))) LEFT JOIN t_search_cache sc ON ((sb.sid = sc.sid))) LEFT JOIN (SELECT t_shop_shopopsion.sid, count(t_shop_shopopsion.sid) AS icon_count FROM t_shop_shopopsion GROUP BY t_shop_shopopsion.sid) icon ON ((sb.sid = icon.sid))) LEFT JOIN m_region mr ON (((sb.sd_open_chiku)::text = (mr.region_id)::text))) LEFT JOIN m_todoufuken mt ON (((mr.todoufuken_id)::text = (mt.todoufuken_id)::text))) ORDER BY (sb.sd_shop_rank IS NULL), sb.sd_shop_rank DESC, sb.sd_last_update DESC;


ALTER TABLE public.v_search_view OWNER TO "tokoton-navi";

--
-- Name: rate_id; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE m_rate ALTER COLUMN rate_id SET DEFAULT nextval('m_rate_rate_id_seq'::regclass);


--
-- Name: admin_id; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_manager_account ALTER COLUMN admin_id SET DEFAULT nextval('t_manager_account_admin_id_seq'::regclass);


--
-- Name: info_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_manager_info ALTER COLUMN info_no SET DEFAULT nextval('t_manager_info_info_no_seq'::regclass);


--
-- Name: top_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_manager_topics ALTER COLUMN top_no SET DEFAULT nextval('t_manager_topics_top_no_seq'::regclass);


--
-- Name: ud_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_manager_usedata ALTER COLUMN ud_no SET DEFAULT nextval('t_manager_usedata_ud_no_seq'::regclass);


--
-- Name: opt_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_adoption ALTER COLUMN opt_no SET DEFAULT nextval('t_shop_adoption_opt_no_seq'::regclass);


--
-- Name: sid; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_base ALTER COLUMN sid SET DEFAULT nextval('t_shop_base_sid_seq'::regclass);


--
-- Name: cam_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_campaign ALTER COLUMN cam_no SET DEFAULT nextval('t_shop_campaign_cam_no_seq'::regclass);


--
-- Name: cou_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_coupon ALTER COLUMN cou_no SET DEFAULT nextval('t_shop_coupon_cou_no_seq'::regclass);


--
-- Name: db_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_dscbase ALTER COLUMN db_no SET DEFAULT nextval('t_shop_dscbase_db_no_seq'::regclass);


--
-- Name: dd_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_dscdetail ALTER COLUMN dd_no SET DEFAULT nextval('t_shop_dscdetail_dd_no_seq'::regclass);


--
-- Name: mail_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_mailformat ALTER COLUMN mail_no SET DEFAULT nextval('t_shop_mailformat_mail_no_seq'::regclass);


--
-- Name: pb_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_planbase ALTER COLUMN pb_no SET DEFAULT nextval('t_shop_planbase_pb_no_seq'::regclass);


--
-- Name: pd_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_plandetail ALTER COLUMN pd_no SET DEFAULT nextval('t_shop_plandetail_pd_no_seq'::regclass);


--
-- Name: pdsc_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_plandiscount ALTER COLUMN pdsc_no SET DEFAULT nextval('t_shop_plandiscount_pdsc_no_seq'::regclass);


--
-- Name: srv_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_service ALTER COLUMN srv_no SET DEFAULT nextval('t_shop_service_srv_no_seq'::regclass);


--
-- Name: so_no; Type: DEFAULT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE t_shop_shopopsion ALTER COLUMN so_no SET DEFAULT nextval('t_shop_shopopsion_so_no_seq'::regclass);


--
-- Name: m_area_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY m_area
    ADD CONSTRAINT m_area_pkey PRIMARY KEY (area_id);


--
-- Name: m_region_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY m_region
    ADD CONSTRAINT m_region_pkey PRIMARY KEY (region_id);


--
-- Name: m_todoufuken_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY m_todoufuken
    ADD CONSTRAINT m_todoufuken_pkey PRIMARY KEY (todoufuken_id);


--
-- Name: t_manager_account_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_manager_account
    ADD CONSTRAINT t_manager_account_pkey PRIMARY KEY (id, pwd);


--
-- Name: t_manager_info_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_manager_info
    ADD CONSTRAINT t_manager_info_pkey PRIMARY KEY (info_no);


--
-- Name: t_manager_topics_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_manager_topics
    ADD CONSTRAINT t_manager_topics_pkey PRIMARY KEY (top_no);


--
-- Name: t_manager_usedata_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_manager_usedata
    ADD CONSTRAINT t_manager_usedata_pkey PRIMARY KEY (ud_no);


--
-- Name: t_search_cache_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_search_cache
    ADD CONSTRAINT t_search_cache_pkey PRIMARY KEY (sid);


--
-- Name: t_shop_adoption_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_adoption
    ADD CONSTRAINT t_shop_adoption_pkey PRIMARY KEY (opt_no);


--
-- Name: t_shop_base_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_base
    ADD CONSTRAINT t_shop_base_pkey PRIMARY KEY (sid);


--
-- Name: t_shop_base_sd_account_key; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_base
    ADD CONSTRAINT t_shop_base_sd_account_key UNIQUE (sd_account, sd_pwd);


--
-- Name: t_shop_campaign_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_campaign
    ADD CONSTRAINT t_shop_campaign_pkey PRIMARY KEY (cam_no);


--
-- Name: t_shop_coupon_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_coupon
    ADD CONSTRAINT t_shop_coupon_pkey PRIMARY KEY (cou_no);


--
-- Name: t_shop_dscbase_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_dscbase
    ADD CONSTRAINT t_shop_dscbase_pkey PRIMARY KEY (db_no);


--
-- Name: t_shop_dscdetail_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_dscdetail
    ADD CONSTRAINT t_shop_dscdetail_pkey PRIMARY KEY (dd_no);


--
-- Name: t_shop_mailformat_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_mailformat
    ADD CONSTRAINT t_shop_mailformat_pkey PRIMARY KEY (mail_no);


--
-- Name: t_shop_planbase_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_planbase
    ADD CONSTRAINT t_shop_planbase_pkey PRIMARY KEY (pb_no);


--
-- Name: t_shop_plandetail_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_plandetail
    ADD CONSTRAINT t_shop_plandetail_pkey PRIMARY KEY (pd_no);


--
-- Name: t_shop_plandiscount_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_plandiscount
    ADD CONSTRAINT t_shop_plandiscount_pkey PRIMARY KEY (pdsc_no);


--
-- Name: t_shop_service_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_service
    ADD CONSTRAINT t_shop_service_pkey PRIMARY KEY (srv_no);


--
-- Name: t_shop_shopopsion_pkey; Type: CONSTRAINT; Schema: public; Owner: tokoton-navi; Tablespace: 
--

ALTER TABLE ONLY t_shop_shopopsion
    ADD CONSTRAINT t_shop_shopopsion_pkey PRIMARY KEY (so_no);


--
-- Name: t_shop_dscbase_insert; Type: RULE; Schema: public; Owner: tokoton-navi
--

CREATE RULE t_shop_dscbase_insert AS ON INSERT TO t_shop_dscbase DO UPDATE t_shop_base SET sd_last_update = now() WHERE (t_shop_base.sid = new.sid);


--
-- Name: t_shop_dscbase_update; Type: RULE; Schema: public; Owner: tokoton-navi
--

CREATE RULE t_shop_dscbase_update AS ON UPDATE TO t_shop_dscbase DO UPDATE t_shop_base SET sd_last_update = now() WHERE (t_shop_base.sid = new.sid);


--
-- Name: t_shop_mailformat_insert; Type: RULE; Schema: public; Owner: tokoton-navi
--

CREATE RULE t_shop_mailformat_insert AS ON INSERT TO t_shop_mailformat DO UPDATE t_shop_base SET sd_last_update = now() WHERE (t_shop_base.sid = new.sid);


--
-- Name: t_shop_mailformat_update; Type: RULE; Schema: public; Owner: tokoton-navi
--

CREATE RULE t_shop_mailformat_update AS ON UPDATE TO t_shop_mailformat DO UPDATE t_shop_base SET sd_last_update = now() WHERE (t_shop_base.sid = new.sid);


--
-- Name: t_shop_planbase_insert; Type: RULE; Schema: public; Owner: tokoton-navi
--

CREATE RULE t_shop_planbase_insert AS ON INSERT TO t_shop_planbase DO UPDATE t_shop_base SET sd_last_update = now() WHERE (t_shop_base.sid = new.sid);


--
-- Name: t_shop_planbase_update; Type: RULE; Schema: public; Owner: tokoton-navi
--

CREATE RULE t_shop_planbase_update AS ON UPDATE TO t_shop_planbase DO UPDATE t_shop_base SET sd_last_update = now() WHERE (t_shop_base.sid = new.sid);


--
-- Name: t_shop_service_insert; Type: RULE; Schema: public; Owner: tokoton-navi
--

CREATE RULE t_shop_service_insert AS ON INSERT TO t_shop_service DO UPDATE t_shop_base SET sd_last_update = now() WHERE (t_shop_base.sid = new.sid);


--
-- Name: t_shop_service_update; Type: RULE; Schema: public; Owner: tokoton-navi
--

CREATE RULE t_shop_service_update AS ON UPDATE TO t_shop_service DO UPDATE t_shop_base SET sd_last_update = now() WHERE (t_shop_base.sid = new.sid);


--
-- Name: t_shop_shopopsion_insert; Type: RULE; Schema: public; Owner: tokoton-navi
--

CREATE RULE t_shop_shopopsion_insert AS ON INSERT TO t_shop_shopopsion DO UPDATE t_shop_base SET sd_last_update = now() WHERE (t_shop_base.sid = new.sid);


--
-- Name: t_shop_shopopsion_update; Type: RULE; Schema: public; Owner: tokoton-navi
--

CREATE RULE t_shop_shopopsion_update AS ON UPDATE TO t_shop_shopopsion DO UPDATE t_shop_base SET sd_last_update = now() WHERE (t_shop_base.sid = new.sid);


--
-- Name: t_search_cache_sid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_search_cache
    ADD CONSTRAINT t_search_cache_sid_fkey FOREIGN KEY (sid) REFERENCES t_shop_base(sid) ON DELETE CASCADE;


--
-- Name: t_shop_adoption_sid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_adoption
    ADD CONSTRAINT t_shop_adoption_sid_fkey FOREIGN KEY (sid) REFERENCES t_shop_base(sid) ON DELETE CASCADE;


--
-- Name: t_shop_campaign_sid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_campaign
    ADD CONSTRAINT t_shop_campaign_sid_fkey FOREIGN KEY (sid) REFERENCES t_shop_base(sid) ON DELETE CASCADE;


--
-- Name: t_shop_coupon_sid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_coupon
    ADD CONSTRAINT t_shop_coupon_sid_fkey FOREIGN KEY (sid) REFERENCES t_shop_base(sid) ON DELETE CASCADE;


--
-- Name: t_shop_dscbase_sid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_dscbase
    ADD CONSTRAINT t_shop_dscbase_sid_fkey FOREIGN KEY (sid) REFERENCES t_shop_base(sid) ON DELETE CASCADE;


--
-- Name: t_shop_dscdetail_db_no_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_dscdetail
    ADD CONSTRAINT t_shop_dscdetail_db_no_fkey FOREIGN KEY (db_no) REFERENCES t_shop_dscbase(db_no) ON DELETE CASCADE;


--
-- Name: t_shop_mailformat_sid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_mailformat
    ADD CONSTRAINT t_shop_mailformat_sid_fkey FOREIGN KEY (sid) REFERENCES t_shop_base(sid) ON DELETE CASCADE;


--
-- Name: t_shop_planbase_sid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_planbase
    ADD CONSTRAINT t_shop_planbase_sid_fkey FOREIGN KEY (sid) REFERENCES t_shop_base(sid) ON DELETE CASCADE;


--
-- Name: t_shop_plandetail_pb_no_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_plandetail
    ADD CONSTRAINT t_shop_plandetail_pb_no_fkey FOREIGN KEY (pb_no) REFERENCES t_shop_planbase(pb_no) ON DELETE CASCADE;


--
-- Name: t_shop_plandetail_sid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_plandetail
    ADD CONSTRAINT t_shop_plandetail_sid_fkey FOREIGN KEY (sid) REFERENCES t_shop_base(sid) ON DELETE CASCADE;


--
-- Name: t_shop_plandiscount_pb_no_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_plandiscount
    ADD CONSTRAINT t_shop_plandiscount_pb_no_fkey FOREIGN KEY (pb_no) REFERENCES t_shop_planbase(pb_no) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: t_shop_service_sid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_service
    ADD CONSTRAINT t_shop_service_sid_fkey FOREIGN KEY (sid) REFERENCES t_shop_base(sid) ON DELETE CASCADE;


--
-- Name: t_shop_shopopsion_sid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tokoton-navi
--

ALTER TABLE ONLY t_shop_shopopsion
    ADD CONSTRAINT t_shop_shopopsion_sid_fkey FOREIGN KEY (sid) REFERENCES t_shop_base(sid) ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

--
-- PostgreSQL database cluster dump complete
--

