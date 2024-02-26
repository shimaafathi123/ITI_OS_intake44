<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:variable name="red" select="'#FF0000'"/>
  <xsl:variable name="blue" select="'#0000FF'"/>
  <xsl:variable name="green" select="'#008000'"/>

  <xsl:template match="/">
    <html>
      <head>
        <title>CD Catalog</title>
      </head>
      <body>
        <h2>CD Catalog</h2>
        <table border="1">
          <tr bgcolor="#CCCCCC">
            <th>Title</th>
            <th>Artist</th>
            <th>Price</th>
          </tr>
          <xsl:apply-templates select="catalog/cd[year &gt; 1990]">
            <xsl:sort select="country"/>
          </xsl:apply-templates>
        </table>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="cd">
    <tr>
      <td><xsl:value-of select="title"/></td>
      <td><xsl:value-of select="artist"/></td>
      <td>
        <xsl:attribute name="bgcolor">
          <xsl:call-template name="price-color">
            <xsl:with-param name="price" select="price"/>
          </xsl:call-template>
        </xsl:attribute>
        <xsl:value-of select="price"/>
      </td>
    </tr>
  </xsl:template>

  <xsl:template name="price-color">
    <xsl:param name="price"/>
    <xsl:choose>
      <xsl:when test="$price &gt;= 10">
        <xsl:value-of select="$red"/>
      </xsl:when>
      <xsl:when test="$price &gt;= 8">
        <xsl:value-of select="$blue"/>
      </xsl:when>
      <xsl:otherwise>
        <xsl:value-of select="$green"/>
      </xsl:otherwise>
    </xsl:choose>
  </xsl:template>

</xsl:stylesheet>
