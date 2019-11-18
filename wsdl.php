<!--
 
(c) Taurus
2019-11-18
From a given email and password return the correspondent JWT

Online WSDL 1.1 SOAP generator 0.2
Julien Blitte
 
-->
<definitions xmlns:tns="co.taurus.coff33.taurus.auth.wsdl" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsd1="co.taurus.coff33.taurus.auth.xsd" xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns="http://schemas.xmlsoap.org/wsdl/" name="From a given email and password return the correspondent JWT" targetNamespace="co.taurus.coff33.taurus.auth.wsdl">
    <!--  definition of datatypes  -->
    <types>
        <schema xmlns="http://www.w3.org/2000/10/XMLSchema" targetNamespace="co.taurus.coff33.taurus.auth.xsd">
            <element name="email">
                <complexType>
                    <all>
                        <element name="value" type="string" />
                    </all>
                </complexType>
            </element>
            <element name="password">
                <complexType>
                    <all>
                        <element name="value" type="string" />
                    </all>
                </complexType>
            </element>
            <element name="json">
                <complexType>
                    <all>
                        <element name="value" type="string" />
                    </all>
                </complexType>
            </element>
        </schema>
    </types>
    <!--  response messages  -->
    <message name="returns_json">
        <part name="json" type="xsd:json" />
    </message>
    <!--  request messages  -->
    <message name="login">
        <part name="email" type="xsd:email" />
        <part name="password" type="xsd:password" />
    </message>
    <!--  server's services  -->
    <portType name="Auth">
        <operation name="login">
            <input message="tns:login" />
            <output message="tns:returns_json" />
        </operation>
    </portType>
    <!--  server encoding  -->
    <binding name="Auth_webservices" type="tns:Auth">
        <soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http" />
        <operation name="login">
            <soap:operation soapAction="urn:xmethods-delayed-quotes#login" />
            <input>
            <soap:body use="encoded" namespace="urn:xmethods-delayed-quotes" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
            </input>
            <output>
                <soap:body use="encoded" namespace="urn:xmethods-delayed-quotes" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
            </output>
        </operation>
    </binding>
    <!--  access to service provider  -->
    <service name="Taurus">
        <port name="Taurus_0" binding="Auth_webservices">
            <soap:address location="http://ec2-3-231-146-168.compute-1.amazonaws.com/auth/login.php" />
        </port>
    </service>
</definitions>