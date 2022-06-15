using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Testing
{
    #region Pg
    public class Pg
    {
        #region Member Variables
        protected int _id;
        protected string _pg_name;
        protected string _accomodation;
        protected int _seater;
        protected string _food;
        protected string _laundry;
        protected unknown _rent;
        protected string _ac;
        protected unknown _contact;
        protected long _pimage;
        protected string _address;
        protected unknown _pg_status;
        protected string _place;
        #endregion
        #region Constructors
        public Pg() { }
        public Pg(string pg_name, string accomodation, int seater, string food, string laundry, unknown rent, string ac, unknown contact, long pimage, string address, unknown pg_status, string place)
        {
            this._pg_name=pg_name;
            this._accomodation=accomodation;
            this._seater=seater;
            this._food=food;
            this._laundry=laundry;
            this._rent=rent;
            this._ac=ac;
            this._contact=contact;
            this._pimage=pimage;
            this._address=address;
            this._pg_status=pg_status;
            this._place=place;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Pg_name
        {
            get {return _pg_name;}
            set {_pg_name=value;}
        }
        public virtual string Accomodation
        {
            get {return _accomodation;}
            set {_accomodation=value;}
        }
        public virtual int Seater
        {
            get {return _seater;}
            set {_seater=value;}
        }
        public virtual string Food
        {
            get {return _food;}
            set {_food=value;}
        }
        public virtual string Laundry
        {
            get {return _laundry;}
            set {_laundry=value;}
        }
        public virtual unknown Rent
        {
            get {return _rent;}
            set {_rent=value;}
        }
        public virtual string Ac
        {
            get {return _ac;}
            set {_ac=value;}
        }
        public virtual unknown Contact
        {
            get {return _contact;}
            set {_contact=value;}
        }
        public virtual long Pimage
        {
            get {return _pimage;}
            set {_pimage=value;}
        }
        public virtual string Address
        {
            get {return _address;}
            set {_address=value;}
        }
        public virtual unknown Pg_status
        {
            get {return _pg_status;}
            set {_pg_status=value;}
        }
        public virtual string Place
        {
            get {return _place;}
            set {_place=value;}
        }
        #endregion
    }
    #endregion
}