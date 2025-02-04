
-- RI-1


CREATE FUNCTION check_zona_anomalia ()
RETURNS TRIGGER AS
$$
   BEGIN
      IF NEW.zona2 LIKE (SELECT zona FROM anomalia WHERE id = NEW.id)
        THEN RAISE EXCEPTION 'As zonas sobrepoem se para a anomalia';
      END IF;
      RETURN NEW;
   END
$$ LANGUAGE plpgsql;

CREATE TRIGGER trigger_zona_anomalia
BEFORE INSERT ON anomalia_traducao
FOR EACH ROW EXECUTE PROCEDURE	 check_zona_anomalia();



-- RI-4


CREATE FUNCTION check_utilizador ()
RETURNS TRIGGER AS
$$
   BEGIN
      IF NEW.email LIKE (SELECT email FROM utilizador_qualificado WHERE email = NEW.email)
             OR (SELECT email FROM utilizador_regular WHERE email = NEW.email)
          THEN RETURN NEW;
      ELSE
         RAISE EXCEPTION 'O email não existe num utilizador qualificado ou regular';
      END IF;
   END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER trigger_utilizador
AFTER INSERT ON utilizador
FOR EACH ROW EXECUTE PROCEDURE check_utilizador();



-- RI-5

CREATE FUNCTION check_utilizador_regular ()
RETURNS TRIGGER AS
$$
   BEGIN
      IF NEW.email LIKE (SELECT email FROM utilizador_regular WHERE email = NEW.email)
        THEN RAISE EXCEPTION 'O email existe num utilizador regular';
      END IF;
      RETURN NEW;
   END
$$ LANGUAGE plpgsql;

CREATE TRIGGER trigger_utilizador_qualificado
BEFORE INSERT ON utilizador_qualificado
FOR EACH ROW EXECUTE PROCEDURE	 check_utilizador_regular();



-- RI-6

CREATE FUNCTION check_utilizador_qualificado ()
RETURNS TRIGGER AS
$$
   BEGIN
      IF NEW.email LIKE (SELECT email FROM utilizador_regular WHERE email = NEW.email)
        THEN RAISE EXCEPTION 'O email existe num utilizador qualificado';
      END IF;
      RETURN NEW;
   END
$$ LANGUAGE plpgsql;

CREATE TRIGGER trigger_utilizador_regular
BEFORE INSERT ON utilizador_regular
FOR EACH ROW EXECUTE PROCEDURE	 check_utilizador_qualificado();




